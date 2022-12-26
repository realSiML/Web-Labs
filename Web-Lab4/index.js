//1.
function z1(x) {
    if (x > 0)
        return Math.sin(x) ** 2;

    return 1 - 2 * Math.sin(x) ** 2;
}

//2.
function z2(n) {
    if (n <= 0 || n > 9999)
        return "n должно быть натуральным"

    const num = n.toString().split('');

    for (let i = 0, j = num.length - 1; i < j; i++, j--) {
        if (num[i] != num[j]) {

            return `${n} - не палиндром`;
        }
    }

    return `${n} - палиндром`;
}

//3.
function z3(year) {
    if (year % 4 == 0)
        if (year % 100 != 0)
            return `${year} - високосный год`;
        else if (year % 400 == 0)
            return `${year} - високосный год`;

    return `${year} - невисокосный год`;
}

//4.
function z4(x) {
    if (x < - 1) return -1;
    if (x > - 1) return x;
    if (x == - 1) return 1;
}

//5.
function z5(m) {

    const Winter = () => "Зима";
    const Spring = () => "Весна";
    const Summer = () => "Лето";
    const Fall = () => "Осень";

    const months = {
        12: Winter(),
        1: Winter(),
        2: Winter(),
        3: Spring(),
        4: Spring(),
        5: Spring(),
        6: Summer(),
        7: Summer(),
        8: Summer(),
        9: Fall(),
        10: Fall(),
        1: Fall(),
        'default': 'Неизвестный месяц',
    }

    let month = (months[m] || months['default'])
    return month;
}

//6.
function z6(m, k) {

    const Cards = {
        6: 'Шестерка',
        7: 'Семерка',
        8: 'Восьмерка',
        9: 'Девятка',
        10: 'Десятка',
        11: 'Валет',
        12: 'Дама',
        13: 'Король',
        14: 'Туз',
    }

    const Suits = {
        1: 'пик ♠',
        2: 'треф ♣',
        3: 'бубен ♦',
        4: 'червей ♥',
    }

    let card = Cards[m] ?? 'Неизвестная карта';
    let suit = Suits[k] ?? 'неизвестной масти';

    return card + " " + suit;
}

//7.
function z7(n) {
    if (n <= 0)
        return "Неверный год";

    let animals = ["Крыса", "Бык", "Тигр", "Кролик", "Дракон", "Змея",
        "Лошадь", "Овца", "Обезьяна", "Петух", "Собака", "Свинья"];
    let colors = ["Белый", "Черный", "Зеленый", "Красный", "Желтый"];

    let res = "";
    n += 20;

    res += animals[n % 12] + ", ";
    res += colors[Math.floor((n % 10) / 2)];

    return res;
}

//8.
function z8() {
    let table = [];

    for (let i = 1; i <= 10; i++) {
        table.push(`9 * ${i} = ` + i * 9);
    }

    return table;
}

//9.
function z9() {
    let col = [];
    let res = "";
    for (let i = 2; i <= 20; i++) {
        //col.push(Math.sin(i));
        res += `sin ${i} = ` + Math.sin(i) + "\n";
    }

    return res;
}

//10.
function z10(a, b) {
    function sumOfAP(a, b) {
        return (a + b) / 2 * (b - a + 1); //арифм. прог.
    }

    let A = sumOfAP(100, 500);
    let B = sumOfAP(a, 500);
    let C = sumOfAP(-10, b);
    let D = sumOfAP(a, b);

    return `a) ${A}\nб) ${B}\nв) ${B}\nг) ${D}`;
}

//11.
function z11(n) {
    //let γ = 0.5772;
    //Math.log(n) + γ // Формула Эйлера

    let sum = 0;

    for (let i = 1; i <= n; i++) {
        sum += 1 / i;
    }

    return sum;
}

//12.
function z12(x, y) {
    let sum = 0;

    for (let i = 0; i < y; i++) {
        sum += x;
    }

    let i = 0;
    do {
        i++;
        sum += x;
    } while (i < y);

    return sum / 2;
}

//13.
function z13(x) {
    return (2 + 2 * (x - 1)) / 2 * x; // арифм. прог. d = 2;
}

//14.
function z14() {
    let sum = 0;
    for (let i = 50; i >= 1; i--) {
        sum = Math.sqrt(sum + i);
    }

    return sum;
}

//15.
function z15(n) {
    let sum = n.reduce((sum, x) => sum += x);
    let len = n.length;

    return [sum, len];
}

//16.
function z16(n) {
    let sum = 0;

    for (let i = 0; i < n.length - 1; i++) {
        sum += n[i];
    }

    return sum / (n.length - 1)
}

//17.
function z17(n) {
    n = n.toString().split('').map(Number);

    let A = n.reduce((total, elem) => {
        return (elem === 3 ? total + 1 : total)
    }, 0);

    let B = n.reduce((total, elem) => {
        return (elem === n[n.length - 1] ? total + 1 : total)
    }, 0);

    let C = n.reduce((total, elem) => {
        return (elem % 2 === 0 ? total + 1 : total)
    }, 0);

    let D = 0, E = 0;
    for (let i = 0; i < n.length; i++) {
        for (let j = i + 1; j < n.length; j++) {
            if (n[i] + n[j] > 5) D++;
            if (n[i] * n[j] > 7) E++;
        }
    }

    let F = n.reduce((total, elem) => {
        return ((elem === 0 || elem === 5) ? total + 1 : total)
    }, 0);

    return [A, B, C, D, E, F]
}

//18.
function z18(n) {
    n = n.toString().split('').map(Number);

    let A = n.indexOf(Math.max.apply(null, n));
    let B = n.indexOf(Math.min.apply(null, n));

    return [A, B];
}

//19.
function z19(n) {
    if (n == 1)
        return true;

    let del = 1;
    while (n % ++del != 0); {
    };

    return del == n ? true : false;
}

//20.
function z20(n) {
    n = n.toString().split('').map(Number);

    let prev = -1;
    for (const elem of n) {
        if (elem > prev) {
            prev = elem;
        }
        else
            break;
    }

    if (prev == n[n.length - 1])
        return true;

    return false;
}

//21.
function z21(nums, n) {
    let idx = nums.findIndex(x => x > n);

    return idx != -1 ? idx : "не найден";
}

//22.
function z22(n, a, b) {
    n = n.toString().split('').map(Number);

    let count_a = 0, count_b = 0;

    n.forEach(element => {
        if (element === a) count_a++;
        if (element === b) count_b++;
    })

    return count_a > count_b;
}

//23.
function z23() {
    let start = 10;
    let end = 30;
    let A = "", B = "";
    while (start <= end) {
        A += start++ + "\n";
    }

    start = 10;

    do {
        B += start + "\n";
    } while (start++ < end);

    return [A, B];
}