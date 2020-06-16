createNewCharacter = (classe, name, lvl, exp) => {
    switch (classe) {
        case "Starter":
            return new Character(name, lvl, exp);
        case "Warrior":
            return new Warrior(name, lvl, exp);
        case "Mage":
            return new Mage(name, lvl, exp);
        case "Rogue":
            return new Rogue(name, lvl, exp);
        default:
            return;
    }
}

class Character {
    constructor(name, lvl = 1, exp = 0) {
        this.name = name;
        this.lvl = lvl;
        this.exp = exp;
        this.skill = "Slash";
        Character.prototype.characterCount++;
        Character.prototype.characterList.push([this.name, this]);
    }

    static warcry() {
        console.log("Skreugneugneu!");
    }

    static killTarget(target) {
        Character.prototype.characterKills++;
        Character.prototype.characterDeaths++;
        switch (target) {
            case "Character":
                break;
            case "Warrior":
                Warrior.prototype.warriorDeaths++;
            case "Rogue":
                Rogue.prototype.rogueDeaths++;
            case "Mage":
                Mage.prototype.mageDeaths++;
            default:
                break;
        }
    }


}

Character.prototype.characterCount = 0;
Character.prototype.characterKills = 0;
Character.prototype.characterDeaths = 0;
Character.prototype.characterList = [];

class Warrior extends Personnage {
    constructor(name, lvl = 20, exp = 0) {
        super(name);
        this.lvl = lvl;
        this.exp = exp;
        this.skill = "Stomp";
        warriorKills = 0;
        warriorDeaths = 0;
        warriorList = [];
    }

}

class Mage extends Personnage {

}

class Rogue extends Personnage {

}