$(function () {

    var rogue = ["Assassination", "Subtlety", "Combat"];
    var mage = ["Frost", "Arcane", "Fire"];
    var hunter = ["Marksmanship", "Beast Mastery", "Survival"];
    var priestDPS = ["Shadow"];
    var priestHealer = ["Discipline", "Holy"];
    var warlock = ["Demonology", "Destruction", "Affliction"];
    var shamanMdps = ["Enhancement",];
    var shamanRdps = ["Elemental"];
    var shamanHealer = ["Restoration"];
    var druidRdps = ["Balance"];
    var druidMdps = ["Feral"];
    var druidHealer = ["Restoration"];
    var druidTank = ["Guardian"];
    var warriorTank = ["Protection"];
    var warriorDPS = ["Arms", "Fury"];
    var deathKnightDPS = ["Frost", "Unholy"];
    var deathKnightTank = ["Blood"];
    var paladinHealer = ["Holy"];
    var paladinTank = ["Protection"];
    var paladinDPS = ["Retribution"];
    var monkHealer = ["Mistweaver"];
    var monkTank = ["Brewmaster"];
    var monkDPS = ["Windwalker"];

    var tank = ["Please Select a Class", "Warrior", "Death Knight", "Paladin", "Druid", "Monk"];
    var healer = ["Please Select a Class", "Priest", "Paladin", "Druid", "Monk", "Shaman"];
    var rdps = ["Please Select a Class", "Hunter", "Priest", "Warlock", "Mage", "Shaman", "Druid"];
    var mdps = ["Please Select a Class", "Warrior", "Rogue", "Shaman", "Paladin", "Death Knight", "Monk"];

    var classOptions;
    var specOptions;

    $('#role').change(function () {
        var roleSelected = document.getElementById("role").value;
        var classCombo = document.getElementById("class");

        switch (roleSelected) {

            case "Tank":
                classOptions = tank;
                break;

            case "Healer":
                classOptions = healer;
                break;

            case "MDPS":
                classOptions = mdps;
                break;

            case "RDPS":
                classOptions = rdps;
                break;
        }

        while (classCombo.hasChildNodes()) {
            classCombo.removeChild(classCombo.lastChild);
        }


        for (var i = 0; i < classOptions.length; i++) {
            var opt = classOptions[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            classCombo.appendChild(el);
        }


    });

    $('#class').change(function () {
        var classSelected = document.getElementById("class").value;
        var roleSelected = document.getElementById("role").value;
        var specCombo = document.getElementById("spec");
        //var osCombo = document.getElementById("os");

        switch (classSelected) {

            case "Rogue":

                specOptions = rogue;
                break;

            case "Warlock":
                specOptions = warlock;
                break;

            case "Mage":
                specOptions = mage;
                break;

            case "Hunter":
                specOptions = hunter;
                break;

            case "Priest":
                if (roleSelected == "Healer")
                    specOptions = priestHealer;
                else
                    specOptions = priestDPS;

                break;

            case "Shaman":
                if (roleSelected == "Healer")
                    specOptions = shamanHealer;
                else if (roleSelected == "RDPS")
                    specOptions = shamanRdps;
                else
                    specOptions = shamanMdps;

                break;

            case "Druid":
                if (roleSelected == "MDPS")
                    specOptions = druidMdps;
                else if (roleSelected == "RDPS")
                    specOptions = druidRdps;
                else if (roleSelected == "Healer")
                    specOptions = druidHealer;
                else
                    specOptions = druidTank;
                break;


            case "Warrior":
                if (roleSelected == "Tank")
                    specOptions = warriorTank;
                else
                    specOptions = warriorDPS;
                break;

            case "Death Knight":
                if (roleSelected == "Tank")
                    specOptions = deathKnightTank;
                else
                    specOptions = deathKnightDPS;

                break;

            case
            "Paladin":
                if (roleSelected == "MDPS")
                    specOptions = paladinDPS;
                else if (roleSelected == "Healer")
                    specOptions = paladinHealer;
                else
                    specOptions = paladinTank;
                break;

            case "Monk":
                if (roleSelected == "MDPS")
                    specOptions = monkDPS;
                else if (roleSelected == "Healer")
                    specOptions = monkHealer;
                else
                    specOptions = monkTank;
                break;
        }


        while (specCombo.hasChildNodes()) {
            specCombo.removeChild(specCombo.lastChild);
        }

        /*while (osCombo.hasChildNodes()) {
            osCombo.removeChild(osCombo.lastChild);
        }*/


            var specElement = document.createElement("option");
            specElement.textContent = "Please Select a Spec";
            specElement.value = "";
            specCombo.appendChild(specElement);

      //  var osElement = document.createElement("option");
        //osElement.textContent = "None";
        //osElement.value = "";
       // osCombo.appendChild(osElement);

        for (var i = 0; i < specOptions.length; i++) {
            var opt = specOptions[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            specCombo.appendChild(el);
        }

     /*   for (var i = 0; i < specOptions.length; i++) {
            var opt = specOptions[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            osCombo.appendChild(el);
        }*/


    });

});
