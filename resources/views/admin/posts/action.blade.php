<h1> Criando uma Postagem </h1>
<form action="{{ route('posts.story') }}"method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" id="title">
    <textarea name="content" id="content" cols="25" rows="5">
    </textarea>
    <button type="submit">Enviar</button>
</form>