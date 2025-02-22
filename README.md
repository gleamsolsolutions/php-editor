# PHP Editor - Rich Text Editor with PDF Export  

![GitHub Repo Stars](https://img.shields.io/github/stars/gleamsolsolutions/php-editor?style=social)
![GitHub Forks](https://img.shields.io/github/forks/gleamsolsolutions/php-editor?style=social)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)

## 🚀 About  
A powerful, open-source **PHP Editor** featuring CKEditor for rich text editing and **PDF export** functionality using pdfMake. Built with Bootstrap for a clean and modern UI.

## ✨ Features  
✅ **Rich Text Editing** with CKEditor  
✅ **Export to PDF** using pdfMake  
✅ **Modern & Responsive UI** with Bootstrap  
✅ **Easy to Use & Open Source**  

## 📥 Installation  
Clone the repository:  
```sh
git clone https://github.com/gleamsolsolutions/php-editor.git
cd php-editor


Open in Browser
Simply open index.html in a browser.

📜 Technologies Used
HTML5 & CSS3 - For structuring and styling the editor.
Bootstrap 5 - Provides a responsive layout and styling.
CKEditor 4 - Rich text editing functionality.
pdfMake & html-to-pdfmake - Converts content to a downloadable PDF.
JavaScript (ES6) - For handling user interactions.
📸 Screenshots

🔧 Usage
Write or paste your text in the editor.
Format it using the CKEditor toolbar.
Click "Download PDF" to export your content as a PDF file.
Click "Clear" to reset the editor.
🛠 Customization
To change the editor's default content, modify:
html
Copy
Edit
CKEDITOR.replace('editor');
To change the PDF styling, edit:
js
Copy
Edit
var docDefinition = {
    content: htmlContent,
    styles: {
        header: { fontSize: 18, bold: true, alignment: 'center' },
        content: { fontSize: 12 }
    }
};
🤝 Contributing
Contributions are welcome!

Fork the repository
Create a new branch (git checkout -b feature-name)
Commit your changes (git commit -m "Added new feature")
Push to the branch (git push origin feature-name)
Open a Pull Request
📜 License
This project is licensed under the MIT License. See the LICENSE file for details.

🌍 Connect
🔗 Live Demo: https://www.gleamsol.com/tools/php-editor.php
📧 Contact: info@gleamsol.com

⭐ Star this repo if you find it useful! 🚀
