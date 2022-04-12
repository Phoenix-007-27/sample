  @extends('admin.layouts.main')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Изменение поста</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

<div class="col-12">
      Изменение поста
      <form action="{{route('admin.post.update', $post->id)}}" method="POST" class="col-4">
        @csrf
        @method('PATCH')
        <div class="form-group">

            <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
            <input type="text" class="form-control" name="content" id="content" value="{{$post->content}}">

            @error('title')
            <div class="text-danger">Это поле необходимо для заполнения</div>

            @enderror
          </div>
          <div class="form-group">
        <label for="category">Категория</lable>
            <select class="form-control" id="category" name="category_id">
              @foreach($categories as $category)
            <option 
            {{$category->id === $post->category->id ? ' selected' : ''}}
            value="{{$category->id}}">{{$category->title}}</option>
             @endforeach
             </select>
          
</div>

<div class="form-group">
  <lable for="tags">Тэги</lable>
<select multiple class="form-control" id="tags" name="tags[]">
@foreach($tags as $tag)

    <option 
    @foreach($post->tags as $postTag)
    {{$tag->id === $postTag->id ? ' selected' : ''}}
    @endforeach
    value="{{$tag->id}}">{{$tag->title}}</option>
    @endforeach
</select>
@error('tags')
            <div class="text-danger">Это поле необходимо для заполнения</div>
            @enderror
</div>
          <input type="submit" class="btn btn-primary" value="Изменить">
           </form>
</div>
          <!-- ./col -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
