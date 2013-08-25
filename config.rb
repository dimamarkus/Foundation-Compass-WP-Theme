# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "/wp-content/themes/Foundation-Compass/css"
sass_dir = "/wp-content/themes/Foundation-Compass/scss"
images_dir = "/wp-content/themes/Foundation-Compass/images"
javascripts_dir = "/wp-content/themes/Foundation-Compass/js"
fonts_dir = "/wp-content/themes/Foundation-Compass/fonts"

output_style = :expanded
environment = :development

relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false
color_output = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass scss scss && rm -rf sass && mv scss sass


require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "style.css"
    puts "Moving: #{file}"
    FileUtils.mv(file, File.dirname(file) + "/../" + File.basename(file))
  end
end
