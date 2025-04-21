
/* add your functions here */
function Book(isbn, title, description, universities) {
    this.isbn = isbn;
    this.title = title;
    this.description = description;
    this.universities = universities;
  }
  
  // Prototype method to output the HTML card for one Book
  Book.prototype.outputCard = function() {
    document.write('<div class="mdl-cell mdl-card mdl-shadow--2dp">');
    
    // Book cover image
    document.write('  <div class="mdl-card__media">');
    document.write('    <img src="images/' + this.isbn + '.jpg" title="' + this.title + '">');
    document.write('  </div>');
    
    // Supporting text (description + adopter universities)
    document.write('  <div class="mdl-card__supporting-text">');
    document.write('    <p>' + this.description + '</p>');
    document.write('    <h6>Adopters</h6>');
    document.write('    <ul>');
    for (var i = 0; i < this.universities.length; i++) {
      document.write('      <li>' + this.universities[i] + '</li>');
    }
    document.write('    </ul>');
    document.write('  </div>');
    
    // “READ MORE” link
    document.write('  <div class="mdl-card__actions mdl-card--border">');
    document.write('    <a class="mdl-button">READ MORE</a>');
    document.write('  </div>');
    
    document.write('</div>'); // End card
  };
  