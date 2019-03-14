</main>
<!-- Footer -->
<footer class="page-footer font-small">
    <nav id="menu_footer">
        <?php wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu_class' => 'links',
            'container' =>false ) ); ?>
    </nav>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">©
        <a href="#"> D&D</a>
    </div>
    <!-- Copyright -->
    <?php wp_footer(); ?>
</footer>
<!-- Footer -->
</body>
</html>