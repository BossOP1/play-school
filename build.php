<?php
/**
 * Simple script to build PHP files into static HTML.
 * It reads the .php files, processes them (including header/footer),
 * and saves the output to a /dist directory.
 */

$sourceDir = __DIR__;
$distDir = __DIR__ . '/dist';

// Create dist directory if it doesn't exist
if (!is_dir($distDir)) {
    mkdir($distDir, 0755, true);
    echo "Created dist directory.\n";
}

// Files to build
$pages = [
    'index.php',
    'index.php',
    'about.php',
    'contact.php',
    'pre-nursery.php',
    'nursery.php',
    'lkg.php',
    'ukg.php',
    'gallery.php',
    'thankyou.php'
];

foreach ($pages as $page) {
    if (file_exists($sourceDir . '/' . $page)) {
        // Ob_start will buffer the output instead of printing it
        ob_start();
        
        // Temporarily change cwd to source so includes like 'header.php' work
        chdir($sourceDir);
        
        // Include the file to execute PHP and capture the HTML output
        include $page;
        
        // Get the captured HTML and clean the buffer
        $htmlContent = ob_get_clean();
        
        // Change links from .php to .html in the generated content
        // This regex handles both single and double quotes around the href value
        $htmlContent = preg_replace('/href=(["\'])([^"\']+)\.php\1/', 'href=$1$2.html$1', $htmlContent);

        // Also update form hidden input values that reference .php files
        $htmlContent = preg_replace('/value=(["\'])([^"\']+)\.php\1/', 'value=$1$2.html$1', $htmlContent);
        
        // Save the HTML to the dist folder (change extension to .html)
        $outputFile = $distDir . '/' . str_replace('.php', '.html', $page);
        file_put_contents($outputFile, $htmlContent);
        
        echo "Built: $page -> " . basename($outputFile) . "\n";
    } else {
        echo "Warning: File $page not found.\n";
    }
}

// Function to copy a directory and its contents
function copyDir($src, $dst) {
    if (!is_dir($src)) return;
    
    if (!is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Copy the assets folder intact
echo "Copying assets folder...\n";
copyDir($sourceDir . '/assets', $distDir . '/assets');

// Copy style.css if it exists
if (file_exists($sourceDir . '/style.css')) {
    copy($sourceDir . '/style.css', $distDir . '/style.css');
    echo "Copied style.css.\n";
}

// Create a netlify_redirects file (optional, just to map / to /index2.html if they want index2 as main)
// In this case we'll deploy dist/index2.html, but if index2 is the main homepage, we should copy index2.html to index.html
if (file_exists($distDir . '/index2.html')) {
    copy($distDir . '/index2.html', $distDir . '/index.html');
    echo "Copied index2.html to index.html (Default Homepage).\n";
}

echo "\nBuild complete! The /dist folder is ready to deploy to Netlify.\n";
?>
