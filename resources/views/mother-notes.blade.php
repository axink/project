{{-- <!-- resources/views/mother-notes.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.navbar')

    <meta charset="UTF-8">
    <title>Mother Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">

    <section class="py-16 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-xl">
            <h1 class="text-3xl font-bold text-center text-pink-700 mb-4">📝 Mother's Notes</h1>
            <p class="text-center text-gray-600 mb-6">Write anything you want to remember. Your note will stay in this browser.</p>

            <textarea id="note" class="w-full h-64 p-4 rounded-lg border border-gray-300 shadow resize-none" placeholder="Start typing..."></textarea>

            <div class="mt-4 flex justify-center gap-4">
                <button onclick="saveNote()" class="bg-pink-600 text-white px-6 py-2 rounded hover:bg-pink-700">💾 Save</button>
                <button onclick="clearNote()" class="bg-gray-200 text-gray-800 px-6 py-2 rounded hover:bg-gray-300">🗑️ Clear</button>
            </div>
        </div>
    </section>

    <script>
        // Load note if exists
        document.getElementById('note').value = localStorage.getItem('motherNote') || '';

        function saveNote() {
            const note = document.getElementById('note').value;
            localStorage.setItem('motherNote', note);
            alert("Note saved in this browser 💾");
        }

        function clearNote() {
            document.getElementById('note').value = '';
            localStorage.removeItem('motherNote');
        }
    </script>
    @include('layouts.footer')

</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother's Journal | Pregnancy Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .title-font {
            font-family: 'Playfair Display', serif;
        }
        .note-textarea {
            background-image: linear-gradient(#f8fafc 1px, transparent 1px);
            background-size: 100% 28px;
            line-height: 28px;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-pink-50 to-rose-50 min-h-screen flex flex-col">
    @include('layouts.navbar')

    <main class="flex-grow py-12 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-10">
                <h1 class="title-font text-4xl font-bold text-rose-700 mb-3">🌸 Mother's Journal</h1>
                <p class="text-lg text-rose-600 max-w-2xl mx-auto">
                    Your personal pregnancy diary and notes - saved automatically as you type
                </p>
            </div>

            <!-- Note Editor -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-rose-100">
                <!-- Toolbar -->
                <div class="bg-rose-50 px-6 py-3 border-b border-rose-100 flex items-center justify-between">
                    <div class="flex space-x-2">
                        <button onclick="formatText('bold')" class="p-2 rounded hover:bg-rose-100" title="Bold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </button>
                        <button onclick="formatText('italic')" class="p-2 rounded hover:bg-rose-100" title="Italic">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <button onclick="insertEmoji()" class="p-2 rounded hover:bg-rose-100" title="Insert Emoji">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="text-sm text-rose-500" id="lastSaved">
                        Not saved yet
                    </div>
                </div>
                
                <!-- Text Area -->
                <textarea id="note" class="note-textarea w-full h-96 p-6 text-gray-700 focus:outline-none resize-none"
                    placeholder="Write your thoughts, feelings, questions, or anything you want to remember during this special journey..."></textarea>
                
                <!-- Footer Actions -->
                <div class="bg-rose-50 px-6 py-4 border-t border-rose-100 flex justify-between items-center">
                    <div class="text-sm text-rose-600">
                        <span id="wordCount">0</span> words | <span id="charCount">0</span> characters
                    </div>
                    <div class="flex space-x-3">
                        <button onclick="exportNote()" class="flex items-center px-4 py-2 bg-white text-rose-600 border border-rose-200 rounded-lg hover:bg-rose-50 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Export
                        </button>
                        <button onclick="clearNote()" class="flex items-center px-4 py-2 bg-white text-rose-600 border border-rose-200 rounded-lg hover:bg-rose-50 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Clear
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tips Section -->
            <div class="mt-10 bg-white bg-opacity-70 rounded-xl p-6 border border-rose-100">
                <h3 class="title-font text-xl font-semibold text-rose-700 mb-3">✏️ Journaling Tips for Expecting Mothers</h3>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-start">
                        <span class="text-rose-500 mr-2">•</span> Write about your physical changes and how you feel about them
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-500 mr-2">•</span> Note down questions for your next doctor's appointment
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-500 mr-2">•</span> Record special moments like first kicks or cravings
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-500 mr-2">•</span> Write letters to your unborn baby
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-500 mr-2">•</span> Track symptoms or patterns you notice
                    </li>
                </ul>
            </div>
        </div>
    </main>

    @include('layouts.footer')

    <script>
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            loadNote();
            setupAutoSave();
            updateCounters();
        });

        // Load saved note
        function loadNote() {
            const savedNote = localStorage.getItem('motherJournal');
            if (savedNote) {
                document.getElementById('note').value = savedNote;
                document.getElementById('lastSaved').textContent = 'Last saved: ' + 
                    new Date(parseInt(localStorage.getItem('motherJournalTimestamp'))).toLocaleString();
                updateCounters();
            }
        }

        // Auto-save every 2 seconds when typing
        function setupAutoSave() {
            const noteField = document.getElementById('note');
            let saveTimer;
            
            noteField.addEventListener('input', function() {
                clearTimeout(saveTimer);
                saveTimer = setTimeout(function() {
                    saveNote();
                }, 2000);
                updateCounters();
            });
        }

        // Save note to localStorage
        function saveNote() {
            const note = document.getElementById('note').value;
            localStorage.setItem('motherJournal', note);
            localStorage.setItem('motherJournalTimestamp', Date.now());
            document.getElementById('lastSaved').textContent = 'Last saved: ' + new Date().toLocaleTimeString();
            
            // Show subtle saved indicator
            const indicator = document.createElement('div');
            indicator.textContent = '✓ Saved';
            indicator.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-3 py-2 rounded-lg shadow-lg animate-fadeInOut';
            document.body.appendChild(indicator);
            setTimeout(() => {
                indicator.remove();
            }, 2000);
        }

        // Clear note
        function clearNote() {
            if (confirm('Are you sure you want to clear your note? This cannot be undone.')) {
                document.getElementById('note').value = '';
                localStorage.removeItem('motherJournal');
                localStorage.removeItem('motherJournalTimestamp');
                document.getElementById('lastSaved').textContent = 'Note cleared';
                updateCounters();
            }
        }

        // Export note
        function exportNote() {
            const note = document.getElementById('note').value;
            if (!note.trim()) {
                alert("There's no content to export.");
                return;
            }
            
            const blob = new Blob([note], { type: 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `Pregnancy-Journal-${new Date().toISOString().split('T')[0]}.txt`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        // Update word and character counters
        function updateCounters() {
            const text = document.getElementById('note').value;
            document.getElementById('charCount').textContent = text.length;
            document.getElementById('wordCount').textContent = text.trim() ? text.trim().split(/\s+/).length : 0;
        }

        // Simple text formatting
        function formatText(type) {
            const textarea = document.getElementById('note');
            const start = textarea.selectionStart;
            const end = textarea.selectionEnd;
            const selectedText = textarea.value.substring(start, end);
            let before = "", after = "";
            
            switch(type) {
                case 'bold':
                    before = after = "**";
                    break;
                case 'italic':
                    before = after = "*";
                    break;
            }
            
            textarea.value = textarea.value.substring(0, start) + before + selectedText + after + textarea.value.substring(end);
            textarea.focus();
            textarea.setSelectionRange(start + before.length, end + before.length);
        }

        // Insert emoji at cursor position
        function insertEmoji() {
            const emoji = prompt("Enter an emoji or select one: 😊❤️🌟👶🍼🤰", "😊");
            if (emoji) {
                const textarea = document.getElementById('note');
                const start = textarea.selectionStart;
                textarea.value = textarea.value.substring(0, start) + emoji + textarea.value.substring(textarea.selectionEnd);
                textarea.focus();
                textarea.setSelectionRange(start + emoji.length, start + emoji.length);
            }
        }
    </script>
</body>
</html>