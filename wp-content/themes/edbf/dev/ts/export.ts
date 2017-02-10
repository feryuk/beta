
export interface Animal {
    name(): void;
}

export class Elephant implements Animal {

    constructor() {

    }

    public name() {
        console.log("Elephant");
    }
}

export class Horse implements Animal {

    constructor() {

    }

    public name() {
        console.log("Horstte");
    }
}