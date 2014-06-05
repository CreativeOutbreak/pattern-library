<?php include_once('functions.php'); 
    // Build out URI to reload from form dropdown
    $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    if (isset($_POST['uri']) && isset($_POST['section'])) {
        $pageURL .= $_POST[uri].$_POST[section];
        $pageURL = htmlspecialchars( filter_var( $pageURL, FILTER_SANITIZE_URL ) );

        header("Location: $pageURL");
    }
?>
<!doctype HTML>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Internationalist Pattern Library</title>

    <link rel="stylesheet" href="css/pattern-lib.css" />
    
</head>

<body class="xx">

    <?php if(isset($_GET["url"]) && sanipath( $patternsPath . $_GET["url"] ) ): ?>
        <?php include_pattern( sanipath( $patternsPath . $_GET["url"] ), "Pattern not found." ); ?>
    <?php else : ?>

        <section class="main-content">
        
            <h1 class="xx-title">New Internationalist</h1>
            <p class="xx-subtitle">Pattern Library</p>

            <div class="global-nav deluxe xx-nav">
                
                <ul class="inline-items">
                    <li><a href="http://newint.org">Home</a></li>
                    <li><a href="patchwork.php">View as patchwork</a></li>
                </ul>
                
                <form action="" method="post" id="pattern" class="pattern-jump">
                    <select name="section" id="pattern-select" class="nav-section-select">
                        <option value="">Jump to&#8230;</option>
                        <?php displayOptions($patternsPath); ?>
                        
                    </select>
                    <input type="hidden" name="uri" value="<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>">
                    <button type="submit" id="pattern-submit">Go</button>
                </form>
                
            </div>
            
            <main role="main">
                
                <div class="pattern">
                	<div class="pattern-details">
                	    <h3 class="pattern-name">Swatches</h3>
                	</div>
                    <div class="pattern-preview">
                        <ul class="swatches">
                            <li class="swatch">
                                <p class="swatch-preview" style="background-color: #222;">
                                    <span class="swatch-details"><strong>Text:</strong> #222</span>
                                </p>
                            </li>
                            <li class="swatch">
                                <p class="swatch-preview" style="background-color: rgb(160, 60, 60);">
                                    <span class="swatch-details"><strong>Link:</strong> rgb(160, 60, 60)</span>
                                </p>
                            </li>
                            <li class="swatch">
                                <p class="swatch-preview" style="background-color: rgb(160, 60, 60);"></span>
                                    <span class="swatch-details"><strong>Prime Colour:</strong> #a03c3c</span>
                                </p>
                            </li>
                            <li class="swatch">
                                <p class="swatch-preview" style="background-color: #acba3c;"></span>
                                    <span class="swatch-details"><strong>Accent 2:</strong> #acba3c</span>
                                </p>
                            </li>
                            <li class="swatch">
                                <p class="swatch-preview" style="background-color: rgb(244, 243, 242);">
                                    <span class="swatch-details" style="color: #333;"><strong>Background:</strong> #f4f3f2</span>
                                </p>
                            </li>
                		</ul>
                	</div>
                </div>
                
                <div class="pattern">
                	<div class="pattern-details">
                	    <h3 class="pattern-name">Header</h3>
                	</div>
                    <div class="pattern-preview">
                        <ul>
        		    		<li style="font-family: open sans">Header One</li>
        		    		<li style="font-family: open sans; font-style: italic">Header Two</li>
        		    		<li style="font-family: open sans; font-weight: bold;">Header Three</li>
        		    		<li style="font-family: 'Franklin ITC Pro', sans-serif;">Header Four</li>
        		    		<li style="font-family: 'Georgia Pro Cond', serif">New Internationalist</li>
        		    		<li style="font-family: 'Franklin ITC Pro Bold', sans-serif;">New Internationalist</li>
        		    	</ul>
                	</div>
                </div>

        		<div class="pattern">
        			<div class="pattern-details">
        			    <h3 class="pattern-name">Typography</h3>
        			</div>
        			<div class="pattern-preview">
        		    	<ul>
        		    		<li style="font-family: open sans">Body text: Open Sans <small>· <a href="http://www.webtype.com/font/georgia-pro-complete-family-2/">View at Webtype</a></small></li>
        		    		<li style="font-family: open sans; font-style: italic">Body text: Open Sans Italic</li>
        		    		<li style="font-family: open sans; font-weight: bold;">Bold body text: Georgia Pro Semibold</li>
        		    		<li style="font-family: 'Georgia Pro Cond', serif">Condensed body for mobile: Georgia Pro Condensed</li>
        		    		<li style="font-family: 'Franklin ITC Pro', sans-serif;">Sans-serif: Franklin ITC Pro · <a href="http://www.webtype.com/font/itc-franklin-family/">View at Webtype</a></li>
        		    		<li style="font-family: 'Franklin ITC Pro Bold', sans-serif;">Sans-serif Bold: Franklin ITC Pro Bold</li>
        		    	</ul>
        		    </div>
        		</div>
        		
                <?php displayPatterns($patternsPath); ?>
            
            </main>
        
        </section>

    <?php endif; ?>
</body>

<script src="js/pattern-lib.js"></script>

</html> 
