<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<?php include "../scripts/header.html"; ?>
<h6><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></h6>
<h6>Mercenary Research</h6>
<p><img src="http://musicfamily.org/realm/Factions/picks/MercenaryEncampmentQuest.png" alt="Mercenary Encampment Quest" align="middle"> <b>Mercenary Encampment Quest</b>
<p>We salute you, commander. Your strategical skills had not gone unnoticed within our ranks. We have decided to offer you a chance to establish a formal encampment within your boundaries... Build more structures to strengthen our city.
<p><b>Requirement</b>: Mercenary (Any Alignment), 150K buildings
<p><b>Cost</b>: 10 Notg (1e121)
<p><b>Note</b>: Only needs bought once.
<p><b>Unlocks</b>: Mercenary Unique Buildings
<br/>
<br/>
<p><b>Faction Spell</b>: Tax Collection
<p><img src="http://musicfamily.org/realm/Factions/picks/ShareBenefits.png" alt="Round Table" align="middle"> <b>Good</b>
<p><b>Requirement</b>: Mercenary Camp
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect</b>: Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 35 tiers.
<p><b>Formula</b>: 120 ^ (0.25 * t), where t is tier (FC chance multiplier)
<p><b>Formula</b>: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)
<br/>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ReapInterests.png" alt="Tyrant Garrison" align="middle"> <b>Evil</b>
<p><b>Requirement</b>: Tyrant Garrison
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect</b>: Additional casts of Reap Interests increase its seconds worth of production.
<p><b>Formula</b>: y ^ (1 + 0.2 * Log10(1 + x)), where y is TC original power and x is amount of TC casts
<p><b>Note</b>: Extra time from reap interests does apply to S50.
<p><b>Note</b>: S50 tax collections do increase reap interests.
<br/>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/AppraisalVantage.png" alt="Freemason's Hall" align="middle"> <b>Neutral</b>
<p><b>Requirement</b>: Freemason's Hall
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect</b>: Generates additional Faction Coins per cast
<p><b>Formula</b>: 2.65 * x ^ 2.65, where x is original Faction Coin chance.



<p><b>------------------------------</b>
<p><b>Unique Buildings</b>
<p><b>Good</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/MercenaryCamp.png" alt="Mercenary Camp" align="middle"> <b>Mercenary Camp</b>
<p><b>Requirement</b>: Mercenary Encampment Quest
<p><b>Cost</b>: 100 Qag (1e125)
<p><b>Effect 1</b>: Allows access to Research Facilities
<p><b>Effect 2</b>: Upgrade Knights Jousts to Mercenary Camps, boosting their production based on the amount of Non-Unique buildings you own and unlocking more unique perks for the building.
<p><b>Formula</b>: 1.5 * (1 + x), where X is number of Non-Unique Buildings.
<p><b>Effect 3</b>: Unlocks Round Table
<p><img src="http://musicfamily.org/realm/Factions/picks/RoundTable.png" alt="Round Table" align="middle"> <b>Round Table</b> (Spell Upgrade)
<p><b>Requirement</b>: Mercenary Camp
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect 1</b>: Gives 1 additional upgrade from any of the Good factions. 
<p><b>Effect 2</b>: Upgrades Tax Collection spell to Share Benefits. Increases the production of all buildings and Faction Coin find chance based on this spell tier level for 20 seconds. Can be cast up to 35 tiers.
<p><b>Formula</b>: 120 ^ (0.25 * t), where t is tier (FC chance multiplier)
<p><b>Formula</b>: ((2.20 ^ T) - 1) * 100, multiplicative (production multiplier)
<p><img src="http://musicfamily.org/realm/Factions/picks/GoodMercenaryUpgrade13.png" alt="Round Table" align="middle"> <b>Good Mercenary Upgrade 13</b>
<p>You can purchase any upgrade from any Good Faction for an increased price
<p><b>Requirement</b>: Round Table (Good Spell Upgrade)
<br/>
<br/>
<br/>
<p><b>Evil</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/TyrantGarrison.png" alt="Tyrant Garrison" align="middle"> <b>Tyrant Garrison</b>
<p><b>Requirement</b>: Mercenary Encampment Quest
<p><b>Cost</b>: 100 Qag (1e125)
<p><b>Effect 1</b>: Allows access to Research Facilities
<p><b>Effect 2</b>: Upgrade Evil Fortresses to Tyrant Garrisons, boosting their production based on Offline Production Bonus and unlocking more unique perks for the building.
<p><b>Formula</b>: 0.5 * log10(1+x) ^ 4.5, where x is Offline Production Bonus
<p><b>Effect 3</b>: Unlocks Dark Covenant
<p><img src="http://musicfamily.org/realm/Factions/picks/DarkCovenant.png" alt="Dark Covenant" align="middle"> <b>Dark Covenant</b> (Spell Upgrade)
<p><b>Requirement</b>: Tyrant Garrison
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect 1</b>: Gives 1 additional upgrade from any of the Evil factions. 
<p><b>Effect 2</b>: Upgrades Tax Collection spell to Reap Interests Additional casts of Reap Interests increase its seconds worth of production.
<p><img src="http://musicfamily.org/realm/Factions/picks/EvilMercenaryUpgrade13.png" alt="Round Table" align="middle"> <b>Evil Mercenary Upgrade 13</b>
<p>You can purchase any upgrade from any Evil Faction for an increased price.
<p><b>Requirement</b>: Tyrant Garrison (Evil Spell Upgrade)
<br/>
<br/>
<br/>
<p><b>Neutral</b>
<p><img src="http://musicfamily.org/realm/Factions/picks/Freemason'sHall.png" alt="Freemason's Hall" align="middle"> <b>Freemason's Hall</b>
<p><b>Requirement</b>: Mercenary Encampment Quest
<p><b>Cost</b>: 100 Qag (1e125)
<p><b>Effect 1</b>: Allows access to Research Facilities
<p><b>Effect 2</b>: Upgrade Alchemist Labs to Freemason's Hall, Boosting their production based on the highest amount of assistants you had in a single game (This R) and unlocking more unique perks for the building.
<p><b>Formula</b>: 2.5 * x ^ 2.5, where x is assistants you had in a single game (This R)
<p><b>Effect 3</b>: Unlocks Secret Exchange
<p><img src="http://musicfamily.org/realm/Factions/picks/SecretExchange.png" alt="Secret Exchange" align="middle"> <b>Secret Exchange</b> (Spell Upgrade)
<p><b>Requirement</b>: Freemason's Hall
<p><b>Cost</b>: 1 Qaqag (1e135)
<p><b>Effect </b>: Upgrades Tax Collection spell to Appraisal Vantage, Generates additional Faction Coins per cast
<p><b>Formula</b>: 2.65 * x ^ 2.65, where x is original Faction Coin chance.
<br/>
<br/>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/ObsidianShardArtifact.png" alt="Secrets of the Warriors" align="middle"> <b>Obsidian Shard</b>
<p><b>Requirement</b>: 8000th Excavation as any Faction, R75+
<p><b>Description</b>: Extremely hard and black as darkness itself, this material cannot apparently be carved or melted. It is a mystery how you can make this thing into a sword.
<p><b>Effect</b>: Unlocks Secrets of the Warriors
<br/>
<br/>
<p><img src="http://musicfamily.org/realm/Factions/picks/SecretsoftheWarriors.png" alt="Secrets of the Warriors" align="middle"> <b>Secrets of the Warriors</b>
<p><b>Requirement</b>: Obsidian Shard
<p><b>Cost</b>: 100 Qiqag (1e140) and 10 Qa (1e16) of every Faction Coin.
<p><b>Effect</b>: Unlocks Researches for Mercenaries and increases their production by 1000%.
<br/>
<p><b>------------------------------</b>
<p><b>Research</b>
<p><b>S2875</b>: For Mercenary - Spell Name: Scholarship
<p><b>Requirement</b>: 12000 Freemason's Halls.
<p><b>Cost</b>: 7.26 Qiqag (7.26e168)
<p><b>Effect</b>: Increases the production of Non-Unique buildings by 0.4% per Unique building.
<br/>
<br/>
<p><b>S3200</b>: For All Factions - Spell Name: Manipulation
<p><b>Requirement</b>: 1B (1e9) Tax Collection cast, (Calefaction A1325) and (Psionics S1500).
<p><b>Cost</b>: 387 USsx (3.87.188)
<p><b>Effect</b>: Each active spell increases mana regen by an additional 8% (good merc TC tiers also count).
<p><b>------------------------------</b>
<p><b>C3000</b>: For Mercenary - Spell Name: Customizing
<p><b>Requirement</b>: 9000 Excavations as Mercenary.
<p><b>Cost</b>: 280.7 SpQig (2.807e176)
<p><b>Effect</b>: Increases the production of all buildings based on the amount of artifacts you own.
<p><b>Formula</b>: 1.75 * x ^ 1.75, where X is artifacts.
<br/>
<br/>
<p><b>C3100</b>: For All Factions - Spell Name: Engineering
<p><b>Requirement</b>: 15 days Mercenary time spent (Total).
<p><b>Cost</b>: 329.6 NoQig (3.296e182)
<p><b>Effect</b>: Increase maximum mana based on the total amount of clicks made (This R).
<p><b>Formula</b>: (7.5 * log10(x + 1))^2.15, where x is clicks made
<p><b>------------------------------</b>
<p><b>D2775</b>: For Mercenary - Spell Name: Intervention
<p><b>Requirement</b>: Secrets of the Warriors.
<p><b>Cost</b>: 6.182 TQig (6.182e162)
<p><b>Effect</b>: Increases the production of Unique Building based on time spent with Mercenaries.
<p><b>Formula</b>: 0.1 * x ^ 0.7
<br/>
<br/>
<p><b>D3350</b>: For All Factions - Spell Name: Vampirism
<p><b>Requirement</b>: 1QA% (1e15) offline bonus, (Intervention D2775) and (Upheaval W3150).
<p><b>Cost</b>: 492.5 QaSxg (4.925e197)
<p><b>Effect</b>: Increases offline production based on the amount of Reincarnations you made.
<p><b>Formula</b>: 1.7 * x ^ 1.7
<p><b>------------------------------</b>
<p><b>E3250</b>: For Mercenary - Spell Name: Estates
<p><b>Requirement</b>: 50000 Unique buildings, (Hoarding E1225) and (Combination A2950).
<p><b>Cost</b>: 419.4 DSxg (4,194e191)
<p><b>Effect</b>: Gives you all the Unique Buildings of your alignment.
<p><b>Effect</b>: Also unlocks all researches involving these unique buildings.
<br/>
<br/>
<p><b>E3300</b>: For All Factions - Spell Name: Hirelings
<p><b>Requirement</b>: (Intimidation E1325) and (Scholarship S2875).
<p><b>Cost</b>: 454.5 TSxg (4.545e194)
<p><b>Effect</b>: Gives assistants based on the gold you have.
<p><b>Formula</b>: 2 * log10(x + 1) additive
<p><b>------------------------------</b>
<p><b>A2950</b>: For Mercenary - Spell Name: Combination
<p><b>Requirement</b>: All Lineages Level at 15.
<p><b>Cost</b>: 259 SxQig (2.59e173)
<p><b>Effect</b>: Select an aditional bloodline.
<p><b>Effect</b>: You also gain all the base effect of its respective Lineage.
<br/>
<br/>
<p><b>A3400</b>: For All Factions - Spell Name: Chemistry
<p><b>Requirement</b>: 1 No (1e30) FC, (Customizing C3000) and (Manipulation S3200).
<p><b>Cost</b>: 533.7 QiSxg (5.337e200)
<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 350%.
<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.
<p><b>------------------------------</b>
<p><b>W3050</b>: For Mercenary - Spell Name: Flanking
<p><b>Requirement</b>: 50000 Base Assistants, (Authority W1275) and (Intimidation E1325).
<p><b>Cost</b>: 304.1 OcQig (2.146e179)
<p><b>Effect</b>: Increases the production of buildings one tiers directly above or below a Unique Building based on the amount of assistants you own.
<p><b>Formula</b>: 0.15 * x ^ 0.8, where X is assistants.
<br/>
<br/>
<p><b>W3150</b>: For All Factions - Spell Name: Upheaval
<p><b>Requirement</b>: 60000 Enchanted Fields, Inns and Dwarven Forges.
<p><b>Cost</b>: 357.2 Sxg (3.572e185)
<p><b>Effect</b>: Increases the production of all buildings based on their tier, giving the highest bonus to the lowest.
<p><b>Formula</b>: 50*(12-T)^2.15, where T is building tier. 
<?php include "../scripts/footer.html"; ?>
