<?php
include("rainbowIterator.php");

if (!isset($iterator) || !is_numeric($iterator) || $iterator <= 0) {
    $iterator = 64; // default value
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Chapter 11</title>         
    <style>

        body {
            font-family: Helvetica, sans-serif; /* // added */
            background-color: #f4f4f4; /* // added */
        }

        main {
           position: relative; 
           margin: 0;
           padding: 0; 
        }        
        span {
            height: 40px;
            width: 40px;
            border: solid black 1px;
            margin:1px;
            display: inline-block;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        span:hover {
        transform: scale(1.3); 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.6); 
        z-index: 10; 
        animation: pulse 0.4s ease;
        }

        @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.3); }
        100% { transform: scale(1); }
        }
        
        span:focus { /* // added */
            outline: 2px solid yellow;
            transform: scale(1.2);
        }
        
        span:active {
            transform: scale(1.1); 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.6); 
        }

        #colorInfo { /* // updated */
    position: fixed;
    bottom: 10px;            /* 👈 moved to bottom */
    left: 50%;               /* 👈 centered horizontally */
    transform: translateX(-50%); /* 👈 adjust for center alignment */
    background: white;
    border: 1px solid #ccc;
    padding: 10px;
    display: none;
    z-index: 999;
    font-family: monospace;
    font-size: 12px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.2); /* // optional: nice shadow */
}
        
    </style>   
</head>
<body>

<main>
<?php
// echo "<h1> Using iterator: ".$iterator."</h1>";
echo "<h1>Using iterator: " . htmlspecialchars($iterator) . "</h1>";

$red=$green=$blue=0;
for ($red=0;$red<255&&$red>=0;$red+=$iterator) {
    
	for ($green=0;$green<255&&$green>=0;$green+=$iterator) {
        
		for ($blue=0;$blue<255&&$blue>=0;$blue+=$iterator) {
            
            $hexColor = "#" . sprintf('%02x',$red) . sprintf('%02x',$green) . sprintf('%02x',$blue);
            
            $styleAttribute = "style='background-color: rgb(" . $red . "," . $green . "," . $blue . ")'";
            $titleAttribute = "title='$hexColor'";
            echo "<span " . $styleAttribute . " " . $titleAttribute . "></span>	\n";
				
            // Added text inside span to show hex color (can be removed or toggled)
            // echo "<span $styleAttribute $titleAttribute>$hexColor</span>\n";
		}
	}
}
?>

</main>

<div id="colorInfo"></div> <!-- // added -->


<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script> <!-- // added -->
<script>
// added hover listener for color info panel
document.querySelectorAll('span').forEach(span => {
    span.addEventListener('mouseenter', () => {
        const color = span.title;
        const rgb = span.style.backgroundColor;
        const infoBox = document.getElementById('colorInfo');
        infoBox.style.display = 'block';
        infoBox.innerHTML = `<strong>HEX:</strong> ${color}<br><strong>RGB:</strong> ${rgb}`;
    });
    span.addEventListener('mouseleave', () => {
        document.getElementById('colorInfo').style.display = 'none';
    });
});

// added export function
function downloadGrid() {
    html2canvas(document.querySelector("main")).then(canvas => {
        let link = document.createElement("a");
        link.download = "color-grid.png";
        link.href = canvas.toDataURL();
        link.click();
    });
}
</script>

</body>
</html>    