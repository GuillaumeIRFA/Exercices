class Personnage {
    constructor(arme, armure) {
        this.arme = new Arme(arme);
        this.armure = new Armure(armure);
    }


}

class Arme {
    constructor(arme) {
        this.armeType = arme;
        this.dmg = 50;
        this.atkspd = 2;
    }

    Youplaboom() {
        this.dmg = 80;
        return 'xd';
    }

    ChangeArme(arme) {
        this.armeType = arme;
    }
}

class Armure {
    constructor(armure) {
        if (!armure) return;
        this.armureType = armure;
        this.def = 20;
        this.dura = 100;
    }
}