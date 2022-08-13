<form action="{{ url('video') }}" method="post" enctype="multipart/form-data">
    <p><input type="text" name="title" placeholder="Enter Video Title" /></p>
    <p><textarea name="description" cols="30" rows="10" placeholder="Video description"></textarea></p>
    <p><input type="file" name="video" /></p>
    <a href="https://artisansweb.net/how-to-upload-video-on-youtube-in-laravel-application/">مرجع العمل </a>
 <br>  
    <a href="https://github.com/joedawson/youtube">Laravel 5 - YouTube Video Upload </a>
<br>

    <button type="submit" class="btn btn-default">Submit</button>
    {{ csrf_field() }}
</form>