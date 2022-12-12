<?
    include_once "lib/php/functions.php";
    include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Computer Accessories store</title>
	<? include "parts/meta.php"; ?>
</head>
<body class="flush">
	<? include "parts/navbar.php"?>

    <div class="view-window" style="background-image:url(img/bg.jpg)">
        <div class="fill-parent display-flex flex-align-center flex-justify-center">
            <!-- <div class="card soft">
                Products
            </div> -->
        </div>
    </div>
    <div class="container">
    	<div class="card soft">
    		
            <h2>Home Page</h2>
  
            <div class="container">
        <aricle id="article1" class="article">
            <h3>About computer</h3>
            <div class="article-body">
                <p>A computer is a digital electronic machine that can be programmed to carry out sequences of arithmetic or logical operations (computation) automatically. Modern computers can perform generic sets of operations known as programs. These programs enable computers to perform a wide range of tasks. A computer system is a nominally complete computer that includes the hardware, operating system (main software), and peripheral equipment needed and used for full operation. This term may also refer to a group of computers that are linked and function together, such as a computer network or computer cluster.  A broad range of industrial and consumer products use computers as control systems. Simple special-purpose devices like microwave ovens and remote controls are included, as are factory devices like industrial robots and computer-aided design, as well as general-purpose devices like personal computers and mobile devices like smartphones. Computers power the Internet, which links billions of other computers and users. </p>
            </div>
        </aricle>
        <aricle id="article2" class="article">
            <h3>Modern computers</h3>
            <div class="article-body">
                <p>The principle of the modern computer was proposed by Alan Turing in his seminal 1936 paper, On Computable Numbers. Turing proposed a simple device that he called "Universal Computing machine" and that is now known as a universal Turing machine. He proved that such a machine is capable of computing anything that is computable by executing instructions (program) stored on tape, allowing the machine to be programmable. The fundamental concept of Turing's design is the stored program, where all the instructions for computing are stored in memory. Von Neumann acknowledged that the central concept of the modern computer was due to this paper. Turing machines are to this day a central object of study in theory of computation. Except for the limitations imposed by their finite memory stores, modern computers are said to be Turing-complete, which is to say, they have algorithm execution capability equivalent to a universal Turing machine. </p>
                
            </div>
        </aricle>
        <div class="view-window" style="background-image: url(img/bg2.jpg);"></div>
        <aricle id="article3" class="article">
            <h3>Keyboard computer</h3>
            <div class="article-body">
                <p>A keyboard computer is a computer which contains all of the regular components of a personal computer, except for a screen, in the same housing as the keyboard. The power supply is typically external and connects to the computer via an adapter cable. The motherboard is specially designed to fit inside, and the device is larger than most standard keyboards. Additional peripheral components such as a monitor are connected to the computer via external ports. Usually a minimum of storage devices, if any, is built in.</p>
                <h4>Mobile computers</h4>
                <p>The first mobile computers were heavy and ran from mains power. The 50 lb (23 kg) IBM 5100 was an early example. Later portables such as the Osborne 1 and Compaq Portable were considerably lighter but still needed to be plugged in. The first laptops, such as the Grid Compass, removed this requirement by incorporating batteries – and with the continued miniaturization of computing resources and advancements in portable battery life, portable computers grew in popularity in the 2000s. The same developments allowed manufacturers to integrate computing resources into cellular mobile phones by the early 2000s.
                These smartphones and tablets run on a variety of operating systems and recently became the dominant computing device on the market. These are powered by System on a Chip (SoCs), which are complete computers on a microchip the size of a coin.</p>
                <h4>Our Computer Accessories</h4>
                <p>Our Computer Accessories store has some commonly used computer accessories, desktop computers and laptops that you can find. The quality is very high and the price is reasonable.</p>
            </div>
        </aricle>
        <aricle id="article4" class="article">
            <h3>After-sale service</h3>
            <div class="article-body">
                <p>If you have any questions, please contact us. You can call us at any time to raise your problems, and we will help you solve them as soon as possible. Or send an email to our mailbox to give valuable suggestions, so that we can become better for you.</p>
                
            </div>
        </aricle>
    </div>
    	</div>
    </div>
   
    <div class="container">
        <h2>Computer accessories of the week</h2>
        <? recommendedCategory("accessories") ?>
        <h2>Cleaning kit of the week</h2>
        <? recommendedSimilar("cleaning kit",8) ?>
    </div>

</body>
</html>