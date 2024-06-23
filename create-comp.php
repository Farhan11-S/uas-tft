<?php

require_once 'backend/my_comp.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (!isset($_SESSION['username'])) header("location:./auth/sign-in.php");

$listChampion = getChampionsWithTraits($conn);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TFT COMP BUILDER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./public/styles/style-comps.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<script>
    const listChampion = <?= json_encode($listChampion, JSON_HEX_TAG) ?>;
    console.log(listChampion);

    const championPicks = [];
    const traitPicks = {};

    const rowRemover = (idChamp) => {
        if (!idChamp) return
        const index = championPicks.indexOf(idChamp)
        championPicks.splice(index, 1)

        traitRemove(listChampion[idChamp])
        const element = document.getElementById(idChamp);
        element.remove();
    }

    const rowBuilder = (idChamp) => {
        if (championPicks.includes(idChamp)) return

        championAdd(idChamp)
        traitAdd(listChampion[idChamp])

        const topSection = document.getElementById('top-section')
        const imageNode = document.createElement("img")
        imageNode.src = listChampion[idChamp].details.image_url
        imageNode.className = 'unit'
        imageNode.id = idChamp

        imageNode.onclick = () => rowRemover(idChamp)

        topSection.appendChild(imageNode)
    }

    const championAdd = (idChamp) => {
        championPicks.push(idChamp)
        const formComp = document.getElementById('form-comp')
        const hiddenInput = document.createElement('input')

        hiddenInput.hidden = true
        hiddenInput.name = 'id_champions[]'
        hiddenInput.setAttribute('value', idChamp)

        formComp.appendChild(hiddenInput)

    }

    const traitAdd = (champ) => {
        champ.traits.forEach((trait) => {
            if (!traitPicks[trait.name]) traitPicks[trait.name] = 0
            traitPicks[trait.name]++
        });

        console.log(traitPicks);
        traitSectionUpdate()
    }

    const traitRemove = (champ) => {
        champ.traits.forEach((trait) => {
            traitPicks[trait.name]--
            if (traitPicks[trait.name] <= 0) delete traitPicks[trait.name]
        })
        traitSectionUpdate()
    }

    const traitSectionUpdate = () => {
        const traitSection = document.getElementById('trait-section')
        traitSection.innerHTML = ''

        if (Object.keys(traitPicks).length === 0) {
            const emptyTextDiv = document.getElementById('empty-text-node')
            emptyTextDiv.innerHTML = 'Start building your comp to seee the synergies'

            return
        } else {
            const emptyTextDiv = document.getElementById('empty-text-node')
            emptyTextDiv.innerHTML = ''
        }


        Object.keys(traitPicks).forEach(function(key) {
            const titleTextNode = document.createTextNode(key)
            const valueTextNode = document.createTextNode(traitPicks[key])

            const cardTrait = document.createElement('div')
            cardTrait.className = 'card-trait'

            const traitTitleDiv = document.createElement('div')
            traitTitleDiv.className = 'title-trait'
            traitTitleDiv.append(titleTextNode)


            const traitValueDiv = document.createElement('div')
            traitValueDiv.className = 'count-trait'
            traitValueDiv.append(valueTextNode)

            cardTrait.appendChild(traitTitleDiv)
            cardTrait.appendChild(traitValueDiv)

            traitSection.appendChild(cardTrait)
        });
    }
</script>

<body>
    <div class="my-comps">
        <div class="header-comps">
            <div><a href="./comps.php" style="color: white; margin-right: 12px;"><i class="fa fa-arrow-left"></i></a> Create TFT Comps</div>
        </div>
        <hr />
        <div class="container">
            <form action="./backend/my_comp.php" method="post" id="form-comp">
                <input class="input-title" type="text" name="title" placeholder="Enter your title comp" required />
                <button name="store" class="button-create-comp">
                    <div>Create</div>
                </button>
            </form>
            <div class="content">
                <div class="sidebar">
                    <div class="title">Traits</div>
                    <div class="traits" id="trait-section">
                    </div>
                    <div class="empty-traits" id="empty-traits">
                        <div id='empty-text-node'>Start building your comp to seee the synergies</div>
                    </div>
                </div>
                <div class="top-section" id="top-section">
                </div>
                <div class="main-content">
                    <?php
                    foreach ($listChampion as $id => $champ) {
                    ?>
                        <div onclick="rowBuilder(<?= $id ?>)">
                            <img src="<?= $champ['details']['image_url'] ?>" class="unit" alt="<?= $champ['details']['name'] ?>" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>