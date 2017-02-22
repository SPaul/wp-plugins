<h1>Gladiolus web studio :: popup plugin settings</h1>
<form role="form" class="col-md-6">
  <div class="form-group">
    <label for="gl_title">Title</label>
    <input type="text" class="form-control" id="gl_title" placeholder="Enter title">
  </div>

  <div class="form-group">
    <label for="gl_content">Content</label>
    <textarea class="form-control" rows="3" name="gl_content" placeholder="Enter content"></textarea>
  </div>

  <div class="form-group">
    <label for="gl_display_timeout">Display timeout</label>
    <input type="number" class="form-control" id="gl_display_timeout" placeholder="Enter timeout">
  </div>

  <div class="form-group">
    <label for="gl_display_time">Display time</label>
    <input type="number" class="form-control" id="gl_display_time" placeholder="Enter display time">
  </div>

  <div class="checkbox">
    <label>
          <input type="checkbox" name="gl_close_btn"> Popup has close button
        </label>
  </div>

  <div class="checkbox">
    <label>
          <input type="checkbox" name="gl_close_esc">Close Popup on Esc
        </label>
  </div>

  <div class="checkbox">
    <label>
          <input type="checkbox" name="gl_close_out_click">Close Popup on lining click
        </label>
  </div>
  <button type="submit" class="btn btn-default">Отправить</button>
</form>