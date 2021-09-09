@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5" style="box-shadow:-13px 13px 32px 2px rgba(0, 0, 0, 0.5);">
                <div class="card-body p-5">
                    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST" class="text-center border border-light">

                        @csrf
                        @method('PATCH')



                                           <p class="h2 mb-4 ">Edit Profile</p>


                                            <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text t bg-dark text-light">Title</span>
                                                    </div>

                                                    <input id="title"
                                                        type="text"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        name="title"
                                                        value="{{ old('title') ?? $user->profile->title}}"
                                                        autocomplete="title" autofocus
                                                        aria-label="Title">

                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="input-group mb-4">

                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text bg-dark text-light t">URL</span>
                                                    </div>

                                                    <input id="url"
                                                        type="text"
                                                        class="form-control @error('url') is-invalid @enderror"
                                                        name="url"
                                                        value="{{ old('url') ?? $user->profile->url}}"
                                                        autocomplete="url" autofocus
                                                        aria-label="URL">

                                                    @error('url')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text bg-dark text-light">Description</span>
                                                </div>

                                                <textarea id="description"
                                                    type="text"
                                                    class="form-control @error('description') is-invalid @enderror"
                                                    name="description"
                                                    value="{{ old('description') ?? $user->profile->description}}"
                                                    autocomplete="description" autofocus
                                                    aria-label="Description">
                                                </textarea>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <hr>

                                            <div class="input-group mb-4">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text bg-dark text-light">profile-Image</span>

                                                <input  type="file"
                                                        class="form-control-file p-2"
                                                        id="image"
                                                        name="image"
                                                        aria-label="Profile-Image">

                                                @error('image')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                                </div>
                                            </div>


                                            <button class="btn btn-primary btn-block my-2">Save Profile</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
