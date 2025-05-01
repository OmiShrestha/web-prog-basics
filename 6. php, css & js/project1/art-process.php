<?php ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/misc.js"></script>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>

<main>
    <section class="results">
    <p class="results__message"> Your artwork details have been successfully saved.</p>
    <br>
    <br>

    <table>
      <caption class="results__caption">Art Work Saved</caption>
      <tr>
        <td class="results__label">Title</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['title'] ?? '') ?></td> 
      </tr>
      <tr>
        <td class="results__label">Description</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['description'] ?? '') ?></td> 
      </tr>
      <tr>
        <td class="results__label">Genre</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['genre'] ?? '') ?></td> 
      </tr>
      <tr>
        <td class="results__label">Subject</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['subject'] ?? '') ?></td> 
      </tr>
      <tr>
        <td class="results__label">Medium</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['medium'] ?? '') ?></td> 
      </tr>   
      <tr>
        <td class="results__label">Year</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['year'] ?? '') ?></td> 
      </tr>  
      <tr>
        <td class="results__label">Museum</td>    
        <td class="results__value"><?= htmlspecialchars($_POST['museum'] ?? '') ?></td> 
      </tr>          
    </table>

    <br>
    <div class="results__actions">
    <a href="Chapter12-project1.php" class="form__btn"> Edit </a>
    </div>

    </section>
</main>       
</body>
</html>
