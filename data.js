var defaultThreads = [
    {
        id: 1,
        title: "Thread Example",
        author: "Omar",
        date: Date.now(),
        content: "Thread content",
        comments: [
            {
                author: "Jack",
                date: Date.now(),
                content: "Example comment"
            },
            {
                author: "Bob",
                date: Date.now(),
                content: "Example comment"
            }
        ]
    },
    {
        id: 2,
        title: "Anyone know what we're supposed to do for assignment 4?",
        author: "Bob",
        date: Date.now(),
        content: "I'm stuck at part 3. I don't know what to do at all.",
        comments: [
            {
                author: "Jack",
                date: Date.now(),
                content: "Which course?"
            },
            {
                author: "Bob",
                date: Date.now(),
                content: "COMP 3340"
            },
            {
                author: "Joe",
                date: Date.now(),
                content: "Just follow the instructions, man. It basically tells you what to do step-by-step."
            },
            {
                author: "Bob",
                date: Date.now(),
                content: "Gee, why haven't I thought of that before? 🙄"
            }
        ]
    }
];

var threads;
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}
