# WP 1% pour les enfants

This repository contains the source code for the `wp_1pple` WordPress plugin.

## Building the plugin

The project includes a simple Node.js helper for packaging the plugin as a ZIP file.

1. Install dependencies (none are required for now, but npm must be available):
   ```bash
   npm install
   ```

2. Run the build script:
   ```bash
   npm run build
   ```

   This will create a `dist` directory (if it doesn't already exist) and generate
   a `wp_1pple.zip` archive containing the entire `wp_1pple` plugin folder.

3. The resulting zip file can be uploaded to a WordPress site or distributed as needed.

## Plugin development

- Place plugin files in `wp_1pple/`.
- Use the PHP file `wp-1pple.php` as the main entry point.
- Add additional assets, classes or other resources as required.

Feel free to modify the build process if you add more tooling in the future.