function analyzeText() {

    var text = document.getElementById("text").value;

    if (text.trim() === "") {
        document.getElementById("error").textContent = "Please enter some text..";
        document.getElementById("charCount").textContent = "";
        document.getElementById("wordCount").textContent = "";
        document.getElementById("reversedText").textContent = "";
        return false;
    }

    document.getElementById("error").textContent = "";

    var charCount = text.length;

    var words = text.trim().split(/\s+/);
    var wordCount = words.length;

    var reversed = text.split("").reverse().join("");

    document.getElementById("charCount").textContent = charCount;
    document.getElementById("wordCount").textContent = wordCount;
    document.getElementById("reversedText").textContent = reversed;

    return false;
}