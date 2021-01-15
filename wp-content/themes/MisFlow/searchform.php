<form action="<?php esc_url(home_url()); ?>" method="post" class="misflow-theme__search-form">
    <section class="misflow-theme__search-form__group" role="search">
        <label for="search_input">Search for: </label>
        <input
                type="search"
                role="textbox"
                aria-label="Search site:"
                id="search_input"
                placeholder="<?php esc_html_e('Please type your looked for resource', 'misflow'); ?>">

        <button type="button" class="misflow-theme__search-form-button" role="button">
            <?php esc_html_e('Search resource', 'misflow'); ?>
        </button>
    </section>
</form>