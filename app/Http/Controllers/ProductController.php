<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Exceptions\Exception;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'script' => 'components.script.product'
        ];
        return view('admin.page.product', $data);
    }


    public function store(Request $request)
    {
        $rules = [
            'title' => 'unique:products',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $json = [
                'msg'       => 'Nama title sudah digunakan!',
                'status'    => false
            ];
            return Response::json($json);
        } elseif ($request->title == NULL) {
            $json = [
                'msg'       => 'Mohon isikan title',
                'status'    => false
            ];
        } elseif ($request->body == NULL) {
            $json = [
                'msg'       => 'Mohon isikan description',
                'status'    => false
            ];
        } elseif ($request->image == NULL) {
            $json = [
                'msg'       => 'Mohon isikan gambar',
                'status'    => false
            ];
        } else {
            try {
                DB::transaction(function () use ($request) {
                    $extension = $request->file('image')->getClientOriginalExtension();
                    $image = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
                    $destination = '/home/uasmasu1/public_html/images/product/';
                    $slug = Str::slug($request->title);
                    Product::create([
                        'title' => $request->title,
                        'slug' => $slug,
                        'body' => $request->body,
                        'category' => $request->category,
                        'image' => $image,
                    ]);
                    $request->file('image')->move($destination, $image);
                });

                $json = [
                    'msg' => 'Product berhasil dibuat',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'Error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }
        return Response::json($json);
    }

    public function show($id)
    {
        if (is_numeric($id)) {
            $data = Product::where('id', $id)
                ->first();
            return Response::json($data);
        }
        $data = Product::orderBy('id', 'desc')->get();
        return datatables()
            ->of($data)
            ->addIndexColumn()
            ->addColumn('image', function ($row) {
                return '<image class="img-thumbnail" src="' . asset('images/product/' . $row->image) . '">';
            })
            ->addColumn('action', function ($row) {
                $data = [
                    'id' => $row->id
                ];

                return view('components.buttons.product', $data);
            })
            ->rawColumns(['action', 'image'])
            ->make(true);

    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => [Rule::unique('products', 'title')->ignore($id)],
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $json = [
                'msg'       => 'Nama title sudah digunakan!',
                'status'    => false
            ];
            return Response::json($json);
        } else {
            try {
                DB::transaction(function () use ($request, $id) {
                    $slug = Str::slug($request->title);
                    DB::table('products')->where('id', $id)->update([
                        'title' => $request->title,
                        'slug' => $slug,
                        'body' => $request->body,
                        'category' => $request->category,
                    ]);
                    if ($request->has('image')) {
                        $product = Product::find($id);
                        $oldImage = $product->image;

                        if ($oldImage) {
                            $pleaseRemove = '/home/uasmasu1/public_html/images/blog/' . $oldImage;

                            if (file_exists($pleaseRemove)) {
                                unlink($pleaseRemove);
                            }
                        }

                        $extension = $request->file('image')->getClientOriginalExtension();
                        $image = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
                        $destination = '/home/uasmasu1/public_html/images/product/';

                        Product::where('id', $id)->update([
                            'image' => $image,
                        ]);
                        $request->file('image')->move($destination, $image);
                    }
                });

                $json = [
                    'msg' => 'Product berhasil disunting',
                    'status' => true
                ];
            } catch (Exception $e) {
                $json = [
                    'msg'       => 'Error',
                    'status'    => false,
                    'e'         => $e
                ];
            }
        }
        return Response::json($json);
    }

    public function destroy($id)
    {
        try {
            $data = Product::find($id);
            if (!$data) {
                $json = [
                    'msg' => 'Data Tidak Ditemukan',
                    'status' => false,
                ];
            }
            $oldImage = $data->image;
            if ($oldImage) {
                $pleaseRemove = '/home/uasmasu1/public_html/images/product/' . $oldImage;

                if (file_exists($pleaseRemove)) {
                    unlink($pleaseRemove);
                }
            }

            DB::transaction(function () use ($id) {
                DB::table('products')->where('id', '=', $id)->delete();
            });

            $json = [
                'msg' => 'Product berhasil dihapus',
                'status' => true
            ];
        } catch (Exception $e) {
            $json = [
                'msg' => 'error',
                'status' => false,
                'e' => $e,
            ];
        }
        return Response::json($json);
    }
}
