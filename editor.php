<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Editor</title>
    <meta name="author" content="Gleamsol Solutions">
    <meta name="description" content="A powerful PHP Editor with rich text editing and PDF export functionality.">
    <meta name="keywords" content="PHP Editor, Rich Text Editor, CKEditor, PDF Export, Open Source">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="PHP Editor">
    <meta property="og:description"
        content="A powerful PHP Editor with rich text editing and PDF export functionality.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://github.com/yourusername/php-editor">
    <meta property="og:image" content="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html-to-pdfmake@2.1.2/browser.js"></script>
    <style>
    body {
        background-color: #f8f9fa;
    }

    .editor-container {
        max-width: 800px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .btn-custom {
        width: 150px;
    }

    .github-fork {
        position: absolute;
        top: 10px;
        right: 10px;
    }
    </style>
</head>

<body>
    <a class="github-fork" href="https://github.com/yourusername/php-editor" target="_blank">
        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="40">
    </a>
    <div class="container">
        <div class="editor-container">
            <h2 class="text-center mb-3">Rich Text Editor</h2>
            <textarea id="editor" class="form-control" rows="10"></textarea>
            <div class="d-flex justify-content-between mt-3">
                <button type="button" class="btn btn-danger btn-custom" onclick="CKEDITOR.instances.editor.setData('')">
                    <i class="bi bi-trash"></i> Clear
                </button>
                <button type="button" class="btn btn-primary btn-custom" onclick="downloadPDF()">
                    <i class="bi bi-file-earmark-pdf"></i> Download PDF
                </button>
            </div>
        </div>
    </div>

    <script>
    CKEDITOR.replace('editor');

    function downloadPDF() {
        if (typeof htmlToPdfmake !== "function") {
            alert("htmlToPdfmake is not loaded. Please check your internet connection or try again.");
            return;
        }
        var editorData = CKEDITOR.instances.editor.getData();
        var element = document.createElement('div');
        element.innerHTML = editorData;
        var htmlContent = htmlToPdfmake(element.innerHTML, {
            window: window
        });
        var docDefinition = {
            content: htmlContent,
            styles: {
                header: {
                    fontSize: 18,
                    bold: true,
                    alignment: 'center'
                },
                content: {
                    fontSize: 12
                }
            }
        };
        pdfMake.createPdf(docDefinition).download('document.pdf');
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
