/*HitPoints randomly generate hit points*/

function getHitPoints (level, conMod, race)
{
    let hitPoints = 0;
    
    let hitDice = 0;
    
    if(level <=9)
        {
            hitDice = level;
        }
    else
    {
        hitDice = 9;
    }
    
        let counter = 0;
    
    if(race == "Halfling" || race == "Elf")
        {
        for(;counter < hitDice; counter++)
            {

                let hpEachLevel = 0;
                hpEachLevel = Math.floor((Math.random() * 6) + 1);

                if(hpEachLevel < 3)
                    {
                        hpEachLevel = 3;
                    }

                hitPoints += hpEachLevel;
            }
            
        }
    else
    {
        for(;counter < hitDice; counter++)
            {

                let hpEachLevel = 0;
                hpEachLevel = Math.floor((Math.random() * 6) + 1);

                if(hpEachLevel < 3)
                    {
                        hpEachLevel = 3;
                    }

                hitPoints += hpEachLevel;
            }
        
    }
    
    
    return hitPoints;
    
}

function addHighLevelHp(input)
{
    let addHp = 0;
    
    if(input == 10)
        {
            addHp = 1;
        }
    else if(input == 11)
        {
            addHp = 2;
        }
    else if(input == 12)
        {
            addHp = 3;
        }
    else if(input == 13)
        {
            addHp = 4;
        }
    else if(input == 14)
        {
            addHp = 5;
        }
    else if(input == 15)
        {
            addHp = 6;
        }
    else if(input == 16)
        {
            addHp = 7;
        }
    else if(input == 17)
        {
            addHp = 8;
        }
    else if(input == 18)
        {
            addHp = 9;
        }
    else if(input == 19)
        {
            addHp = 10;
        }
    else if(input == 20)
        {
            addHp = 11;
        }
    else
    {
        addHp = 0;
    }
    
    return addHp;
}
