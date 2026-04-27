// 🔹 Generate 100 Students
const courses = ["CSE", "ECE", "ME", "AI", "DS"];

const students = Array.from({ length: 100 }, (_, i) => ({
    name: "Student" + (i + 1),
    marks: Math.floor(Math.random() * 50) + 50,
    course: courses[Math.floor(Math.random() * courses.length)]
}));


// 🔹 Display Function
function display(data){
    const tableBody = document.getElementById("tableBody");
    tableBody.innerHTML = "";

    data.forEach(s => {
        const row = `
        <tr>
            <td>${s.name}</td>
            <td>${s.marks}</td>
            <td>${s.course}</td>
        </tr>`;
        tableBody.innerHTML += row;
    });
}


// 🔹 Student Functions
function printNames(){
    display(students);
    clearStudentResult();
}

function marksAbove80(){
    const result = students.filter(s => s.marks > 80);
    display(result);
    clearStudentResult();
}

function countCourses(){
    const count = students.reduce((acc, s) => {
        acc[s.course] = (acc[s.course] || 0) + 1;
        return acc;
    }, {});

    document.getElementById("studentResult").innerText =
        `CSE: ${count.CSE || 0} | ECE: ${count.ECE || 0} | ME: ${count.ME || 0} | AI: ${count.AI || 0} | DS: ${count.DS || 0}`;
}

function showCSE(){
    const cseStudents = students.filter(s => s.course === "CSE");
    display(cseStudents);
    clearStudentResult();
}

function convertUpper(){
    const upper = students.map(s => ({
        name: s.name.toUpperCase(),
        marks: s.marks,
        course: s.course
    }));
    display(upper);
    clearStudentResult();
}

function topStudent(){
    const top = students.reduce((max, s) => s.marks > max.marks ? s : max);
    display([top]);
    document.getElementById("studentResult").innerText = "🏆 Top Student";
}

function totalStudents(){
    document.getElementById("studentResult").innerText =
        "👨‍🎓 Total Students: " + students.length;
}


// 🔹 Helper
function clearStudentResult(){
    document.getElementById("studentResult").innerText = "";
}