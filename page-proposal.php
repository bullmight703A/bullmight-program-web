<?php
/**
 * Template Name: WIMPER Proposal Document Viewer
 */
// Bypass standard WordPress headers and footers for a full-screen, focused app-like PDF viewer
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WIMPER Program Proposal | Official Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f172a; color: #f8fafc; margin: 0; padding: 0; overflow: hidden; }
        .toolbar { height: 80px; }
        .pdf-container { height: calc(100vh - 80px); }
    </style>
</head>
<body>
    <!-- Custom WIMPER Toolbar Over the PDF -->
    <div class="toolbar bg-slate-900 border-b border-white/5 flex items-center justify-between px-4 md:px-8">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-500/10 border border-blue-500/20 rounded-xl flex items-center justify-center text-blue-400 shadow-inner">
                <i data-lucide="file-text" class="w-6 h-6"></i>
            </div>
            <div>
                <h1 class="font-bold text-white text-lg leading-tight tracking-tight">WIMPER Program Proposal</h1>
                <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold mt-1">Confidential Executive Summary</p>
            </div>
        </div>
        <div class="flex items-center gap-3">
            <a href="<?php echo get_template_directory_uri(); ?>/assets/WIMPER_Program_Proposal.pdf" download="WIMPER_Executive_Proposal.pdf" class="bg-blue-600 hover:bg-blue-500 text-white shadow-[0_0_15px_rgba(59,130,246,0.3)] rounded-xl px-5 py-3 font-bold tracking-widest uppercase text-xs flex items-center gap-2 transition-all">
                <i data-lucide="download" class="w-4 h-4"></i> <span class="hidden md:inline">Download</span>
            </a>
            <button onclick="window.close();" class="bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-xl px-5 py-3 font-bold tracking-widest text-xs flex items-center gap-2 transition-all border border-white/10">
                <i data-lucide="x" class="w-4 h-4"></i> <span class="hidden md:inline">Close</span>
            </button>
        </div>
    </div>

    <!-- Natively Embed the PDF via Iframe -->
    <div class="pdf-container w-full bg-[#323639] relative flex items-center justify-center">
        <!-- The #toolbar=1 parameter ensures the native browser PDF menu (with the built-in print/download buttons) operates -->
        <iframe src="<?php echo get_template_directory_uri(); ?>/assets/WIMPER_Program_Proposal.pdf#toolbar=1&navpanes=0&scrollbar=1&view=FitH" class="w-full h-full border-none shadow-2xl"></iframe>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
