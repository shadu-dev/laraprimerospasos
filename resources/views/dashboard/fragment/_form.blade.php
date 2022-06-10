@csrf
<label for="title">Titulo</label>
<input type="text" name="title" value="{{ old('title', $post->title)}}">

<label for="slug">Slug</label>
<input type="text" name="slug" value="{{ old('slug', $post->slug)}}">

<label for="slug">Categoria</label>
<select name="category_id">
    <option value=""></option>
    @foreach ($categories as $id => $title)
    <option {{ (old('category_id', $post->category_id) == $id) ? 'selected' : '' }} value="{{ $id }}">{{ $title}}</option>
    @endforeach
</select>

<label for="slug">Posteado</label>
<select name="posted" id="">
    <option {{ (old('posted', $post->posted) == 'not') ? 'selected' : '' }} value="not">No</option>
    <option {{ (old('posted', $post->posted) == 'yes') ? 'selected' : '' }} value="yes">Si</option>
</select>

<label for="slug">Contenido</label>
<textarea name="content" >{{ old('content', $post->content)}}</textarea>

<label for="description">Descripción</label>
<textarea name="description" >{{ old('description', $post->description)}}</textarea>

@if (isset($task) && $task == 'edit')
    <label for="imagen">Imagen</label>
    <input type="file" name="image">
@endif

<button type="submit">Enviar</button>