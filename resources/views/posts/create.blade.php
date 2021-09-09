@extends('layouts.app')
  @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5" style="box-shadow:-13px 13px 32px 2px rgba(0, 0, 0, 0.5);">
                    <div class="card-body p-5">
                        <form action="/p" enctype="multipart/form-data" method="POST" class="text-center border border-light">

                           @csrf
                                        <div class="p-2">


                                            <p class="h2 mb-4">Add New Post</p>



                                                    <input  id="caption"
                                                            type="text"
                                                            class="form-control mb-4 @error('caption') is-invalid @enderror"
                                                            name="caption"
                                                            value="{{ old('caption') }}"
                                                            placeholder="Post-Caption"
                                                            autocomplete="caption" autofocus>

                                                    @error('caption')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                            <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text bg-dark text-light">Post-Image</span>

                                                <input  type="file"
                                                        class="form-control-file p-2"
                                                        id="image"
                                                        name="image"
                                                        aria-label="Post-Image">

                                                @error('image')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                                    </div>
                                            </div>

                                                <button class="btn btn-primary btn-block my-1">Add New Post</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection
