# Require any additional compass plugins here.

# Paths configuration
css_dir = "/"
sass_dir = "sass"
images_dir = "img"
javascripts_dir = "js"
fonts_dir = "fonts"
# generated_images_dir = "static/images/sprites"

# Output style of the compiled CSS
output_style = (environment == :production) ? :compressed : :expanded

# Prefere relative paths in the CSS
relative_assets = true

# Display the original location (SCSS file and line) of the selector
# Useful for debugging
line_comments = true

# SCSS and not SASS
preferred_syntax = :scss
