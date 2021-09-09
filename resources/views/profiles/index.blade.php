@extends('layouts.app')

@section('content')
 <div class="container justify-content-center align-items-center">

    <div class="row justify-content-center">

      <div class="col-3 p-5"> <!-- profile image of user -->
        <img src="{{ $user->profile->profileImage() }}" class="w-100 rounded-circle">
      </div>

      <div class="col-9 p-5">

      <div class="d-flex mb-2">
        <div class="h2"> {{ $user->username }} </div> <!-- Name of user -->

            <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>


        @can('update', $user->profile)
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>

                <div class="dropdown-menu shadow bg-white rounded" aria-labelledby="dropdownMenuButton">
                    <a href="/p/create" class="dropdown-item text-primary">Add New Post</a>
                    <a href="/profile/{{ $user->id }}/edit" class="dropdown-item text-primary">Edit Profile</a>
                </div>
            </div>
        @endcan

      </div>

       <!-- start block of follower/ing and post -->
        <div class="d-flex">
            <div class="pr-5">
                <strong>{{ $user->posts->count() }}</strong> Posts
            </div>

            <div class="pr-5">
                <strong>{{ $user->profile->followers->count() }}</strong> followers
            </div>

            <div class="pr-5">
                <strong>{{ $user->following->count() }}</strong> following
            </div>
        </div>
       <!-- End block of follower/ing and post -->

       <!-- start block of bio -->
        <div class="pt-4 font-weight-bold">
            {{ $user->profile->title }} <!-- title of user -->
        </div>

        <div class="">
            {{ $user->profile->description }} <!-- Description of user -->
        </div>

        <div>
            <a href="#">{{ $user->profile->url }}</a> <!-- Link(url) of user -->
        </div>
       <!-- End block of bio -->

     </div>
  </div>
    <hr>
      <!-- start block of post section -->
        <div class="row pt-4">
            @foreach ($user->posts as $post)
              <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                  <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
              </div>
            @endforeach
        </div>
      <!-- End block of post section -->
</div>
@endsection
