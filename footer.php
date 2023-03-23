<div class="container">
      <hr>
      <div class="footer" id="footer">
        <div class="slogan"><?php bloginfo( 'description' ); ?></div>
        <div class="meta">
          <?php wp_footer() ?>
          <p>「<?php bloginfo( 'name' ); ?>」使用 <a href="https://wordpress.org" target="_blank">WordPress</a> 和 <a href="https://github.com/Astrian/reflect-white-wordpress-theme" target="_blank">Reflect White</a> 搭建。</p>
          <p class='colorScheme'>色彩模式：<span id='colorSchemeLight' onclick="changeColorScheme('light');">明亮</span> &middot; <span id='colorSchemeDark' onclick="changeColorScheme('dark')">黑暗</span> &middot; <span id='colorSchemeSystem' onclick="changeColorScheme('system')">跟随系统</span></p>
        </div>
      </div>
      <script>
        let footer = new Vue({
          el: '#footer',
          data: {
            message: 'hello'
          },
          delimiters: ['$[', ']']
        })
      </script>
    </div>
  </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  changeColorScheme()
</script>
</html>