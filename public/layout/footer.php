<footer class="section footer-minimal bg-primary-darken">
    <div class="container"> 
      <div class="footer-minimal-inner"><a class="brand" href="home"><img src="public/images/footerlogo.png" alt="" width="199" height="22"/></a>
      <?php
        if($page_name=='' || $page_name=='home'){
          echo '
              <a href="https://sg2plcpnl0075.prod.sin2.secureserver.net:2096/cpsess7529939806/webmail/paper_lantern/index.html" target="_blank" style="color:#fff; margin-left:0px;">Webmail</a>
          ';
        }
        ?>
      <p class="rights"><span>&copy;&nbsp;</span><span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed &amp; Developed by <a href="https://sortieservices.com">SSPL</a></span></p>
    </div>
  </div>
</footer>


