<form method="get" action="<?php echo esc_url(site_url('/')); ?>">
    <div class='d-flex align-items-center justify-content-center'>
        <input type='text' placeholder="Search Here" name="s" class="mr-1 search-input" required />
        <button type='submit' class='search-btn m-0'><span><?php esc_html_e( 'Search', 'abc-tutoring' ); ?></span></button>
    </div>
</form>