<?php $page = "patchnotes" ?>
<?php include "header.php" ?>


<main class="main2">

<h1>Patch Notes</h1>
<?php 
foreach ( $patchnotescontent as $patch):?>
<div class="main2text">
<h2><?php echo $patch['titel'] ?></h2>
<p><?php echo $patch['inhoud'] ?></p>
</div>
<?php endforeach;?>
</main>

<?php include "footer.php"; ?>

















<!-- <h2>Patch 9.12 notes</h2><br>
<p>"Hello, welcome to Patch 9.12! I'm particularly excited about this patch because my friend will finally stop going on and on about the reworked Mordekaiser. Oh, have you not heard? Mordekaiser is back, baby.

In this patch we also have Ryze's sixth (or is it seventh?) ""rework,"" more follow-up to everyone's favorite overpowered cat, and overall nerfs to Sylas. We're also making use of the Balance Framework we published and referencing it in our explanations for some champion changes, so make sure to check that out if you haven't! (Link to it in its respective section below). 

Finally, we have another round of ARAM balance changes for the Howling Abyss enthusiasts as well as some beautiful VFX updates to Lulu, Amumu, Tryndamere, and Ziggs."
</p><br>
<h2>Patch 9.11 notes</h2><br>

<p>"Hey y'all. How are you doing? Having a good week? Good. 

In this patch, outside of some smaller balance work on an assortment of champions, we have bigger updates for Janna and Yuumi, a soft revert to Zac's pre-patch 7.9 self, and a follow-up to the Master Yi changes from 9.10. 

Voted for by players all over the world, Little Demon Tristana is ready to take on some mischief and will be available during this patch cycle. The Rainbow Fluft Icon and its special interactions when equipped will also be available for an extended amount of time in the store!

Finally, starting in 9.11, Challengers will get to experience the long-awaited golden recall animation in unranked queues and the ranked queues they're Challenger in. 

Go get 'em, lions"
</p><br>
<h2>Patch 9.10 notes</h2><br>

<p>"Hello fur-ends! Welcome to 9.10, the one where we greet the one, the only, the purr-fectly wonderful, Yuumi!

This patch, while smaller than the last, contains changes to some of the more spicy champions across various skill brackets like Master Yi, Riven, and Vayne. We're also following up on the changes we made to Soraka last patch to continue to encourage her ally-supporting playstyle and buffing a few champions who've been faltering as of late.

In addition, we've made some adjustments to Conqueror and Guinsoo's Rageblade due to their overperformance and must-pick natures for their core users.

Meow, let's jump right in!"
</p><br>
<h2>Patch 9.9 notes</h2><br>
<p>"Hey all. Welcome to the biggest patch of the year (so far.) 

We're seeing huge changes to Aatrox and Tahm Kench, champions who've relied on specific aspects of their kit to dominate in some skill brackets of play, but make them suffer in others. Soraka's another one we're evaluating, with changes aimed at getting her back to the ally-focused support she was meant to be. A small pool of champions are also getting VFX updates, helping them feel more modern and be up to caliber in visuals to newer champions. 

We're adjusting a wide assortment of runes as well, with the goal of having them compete with other runes and encourage more diverse rune paths. 

Get ready for one of the longest reads of your week."
</p><br>
<h2>Patch 9.8 Notes</h2><br>
<p>"How do you do, fellow kids? Welcome to the MSI 2019 patch. 

Champions we've been seeing a lot of like Gnar, Kayle, Nautilus, and Trundle are getting more adjustments. But some not-too-commonly-seen champs like Amumu and Renekton have joined them. On the items front, we're making Grievous Wounds more consistent across items that have it and adjusting the cost of some marksmen items in light of similar reductions to others in the category over the past couple of patches. 

To all you Gangplank and Miss Fortune cosplayers, say goodbye to Butcher's Bridge as it sets sail until next time in ARAM. But to all your Braum and Ashe fan girls and boys, let's welcome back the Howling Abyss! The team have assessed the feedback and data from the 9.7 ARAM mini-event and have made some decisions to changes that will be applied permanently (or not) starting 9.8. 

Now skedaddle out of here and read on for more details."
</p><br>
<h2>Patch 9.7 notes</h2><br>
<p>"Hey all! Some familiar faces this patch as we continue tuning on bullies like Kayle, Sylas, and Urgot. We also got some QoL changes to things like Predator, Immolate items, and the Practice Tool, as well as some updates to the vision row of Domination runes. 

If you're looking to relax on the open seas, Butcher's Bridge is back for your ARAM-ing leisure so get ready to set sail, ban Ziggs, and put on your Ghostwalkers."

<h2>Patch 9.6 Notes</h2><br>
<p>"Hey beauties. We've got a whole bunch of stuff in this patch, including some small updates to features like LeaverBuster, frame-rate cap, and the Missions Tracker.There’s some tuning to champions we've been seeing regularly, including Neeko (who was nerfed midway through 9.5), Sylas, and Rek'Sai. Kayle is getting minor adjustments based on her first patch performance after being updated. We're bringing ol' Urgod back into relevance with a shield shuffle (it's on his E now!), general buffs, and walking turret mode.

Last thing: We broke double Tear Ezreal."
</p><br>
<h2>Patch 9.5 Notes</h2><br>
<p>"Hey nerds. Let's all welcome our updated seraphim sisters, Kayle and Morgana! 

Not too many crazy new changes this patch, but we're following up with champs like Akali and Sylas, and tuning Conqueror. We're also throwing a bone to the Vi mains and taking a pass at changing up Skarner's Spires. There are a couple of other champions we're monitoring due to their reliance on Conqueror, but until those changes to the rune settle in, we won't be taking any immediate action. (Also, we're gonna nerf Ezreal in 9.6. Still deciding if it'll be via double Tear or Ez directly, but one way or the other... Ezreal nerfs.) 

Let's git it."
</p><br>
<h2>Patch 9.4 Notes</h2><br>
<p>"Hey y'all. Congratulations, you survived last patch's spiciness! You win nothing. 

We're taking another pass at nerfing Urgot, along with first-time nerfs to some other dominant champerdogs. But we're also giving a little love to a troll, a horse, and a screeching Void monster. As a quick follow-up to marksman items, we're making some minor adjustments to Essence Reaver and Kai'Sa's recommended items (stop building Stormrazor first), but otherwise have kept things mostly untouched. 

We also kneecapped the top lane Frostmancy strat partway through last patch, but it bears repeating here given the notoriety the strategy attained. We're looking into more permanent solutions to both Spellthief's Edge and Ancient Coin item lines, but for now we're carrying 9.3's mid-patch update forward. 

Let's get into it!"
</p><br>
<h2>Patch 9.3 notes</h2><br>
<p>"Welcome to 9.3, the patch that's like milk because we're alleviating a lot of spice. On the champion front, we're wrapping up mechanics cleanup on Aatrox, Akali, and Irelia to ensure they've got meaningful weaknesses opponents can capitalize on. Item-wise, we're taking a deep pass on marksman items to solve the build satisfaction issues marksmen have been frustrated by since midseason. We're also changing farm bounties so players who farm their way back from a deficit aren't treated the same as champs who ran away with huge CS leads to begin with. Grab a glass (of milk, remember?) and read on."

<h2>Patch 9.2 notes</h2><br>
<p>"Hello everyone, and welcome to 9.2. This is our season start patch, and while it's a big one, it's pretty straightforward. Names we've heard way too often in recent months (Urgot, Ignite, Red Smite) are getting nerfs, while others we haven't heard in some time (Shyvana, Yorick, Sunfire Cape) are being buffed up. Remember: Knowledge is power, so make sure you're read up on 9.2's changes before charging into Ranked!

Best of luck in your placements,"
</p><br>
<h2>Patch 9.1 notes</h2><br>
<p>"Welcome, one and all, to the first patch of 2019! We hope the holidays treated you well and you're rested up and ready for a fresh new year of League. Let's get into it!

At the top of the notes you'll see a special section for Kalista, Ornn, and Sejuani, all of whom have been much stronger in pro play than regular play. In all three cases, we're reducing the utility they offer to coordinated teams and offering them strength that's less tied to perfect timing, positioning, or communication. From there, we move into the bulk of our champion changes which feature direct buffs to a bunch of marksmen. In each case, we accentuated the unique strengths or highest moments they're picked for, but the impetus for all of them is the same: Marksmen on the whole ended 2018 in a rough spot. We've got some item work in the patches to come as well, so 9.1 isn't the end of the road to recovery. After that, the balance updates wrap up with rune adjustments, including a usability buff to Hail of Blades for champs with attack resets.

Best of luck in your matches on 9.1!"
</p><br>
<h2>Patch 8.24b notes</h2><br>
<p>"Season’s greetings all! This not-technically-a-patch (no skins or new features) brings one more round of balance changes to stuff your stockings with. You'll notice most of these patch notes are light on context, which is because most of the changes are in the ""simple buff"" or ""simple nerf"" spaces—we basically just want a champ or item to be stronger or weaker without significantly changing decision making. Pyke and Akali are the two exceptions, so we stuck 'em at the top. 

Since this is a small patch we'll share a quick preview of 9.1, the first patch of next year. Expect to see a bunch more buffs to individual marksmen as well as sizable changes for Ornn and Sejuani to bring their regular play and pro play performances closer in line with each other. We'll also be following up on preseason's rune changes. 

That's it for us! We on the patch notes team wish you a happy Snowdown and thank you for reading through over 72,000 words of patch notes this year. See you in 2019!"
</p><br>
<h2>Patch 8.24 Notes</h2><br>
<p>"Howdy, everyone. It's been two weeks since preseason launched and our immediate focus is to knock down the highest risers. This gives us a better sense of how our changes are settling across the field, which in turn lets us know whether we should help underperformers on a champ-by-champ basis, or whether opting for systemic buffs will bring several up at once. Depending on how 8.24 goes, you may see some of those buffs in an end-of-year ""8.24b"" balance patch (a patch with no skins or features). There'll be a separate set of patch notes for that, so keep an eye out!

Returning to the present, the last real patch of the year means it's time for Snowdown. Grab your cocoa and your keyboard, and get ready for League's holiday festivities!"
</p><br>
<h2>PATCH 8.23 NOTES</h2><br>
<p>"It's time for preseason! This patch is less about the big meta shifts and gameplay evolution you've seen in preseasons past. Our focus is on refining your existing experience so the time you spend playing League is as satisfying as possible. We've got four major themes this year: laning phase is improved and slightly longer; comebacks are more achievable and satisfying; decided games resolve faster; and rune paths no longer dictate stat bonuses. As is customary, there are also bunch of changes that don't fit into those buckets too (Lissandra has a real passive now!).

This is the first sizable patch we've had in a few months, so there's surely something for you in it! Now get to reading, then get to playing."
</p><br>
<h2>Patch 8.22 notes</h2><br>
<p>"Welcome to the last patch before preseason! It's been a relatively quiet couple of months, but 8.22 revs the gameplay engine back up with a few bigger changes (Pyke and Time Warp Tonic). Worlds has come to an end and the foundations for the next year of League are dropping in a few weeks, so gather your strength and make the final push toward your 2018 goals!"
</p><br>
<h2>Patch 8.21 Notes</h2><br>
<p>"Welcome to 8.21! This patch continues the recent trend of lighter tuning: With preseason coming in about a month, we're avoiding bigger changes that may go completely sideways once the meta shifts. So for now, the name of the game is keeping things stable through the end of the season. We'll get out of your way up here—go read all the stuff below and keep pushing toward your ranked goals!"
</p><br>
<h2>Patch 8.20 notes</h2><br>
<p>"Welcome to 8.20. This patch brings an update to League's most daring, well-dressed, genius, athletic, glory-bound, handsome explorer, Ezreal! (His words.) His gameplay is undergoing a less drastic transformation than past updates, but you'll look a heck of a lot better while slinging skillshots and nabbing bounties—and you still won't need a map.* 

*Please always pay attention to your minimap. 

Other than that, this one's a pretty quiet patch as we switch gears behind the scenes from Worlds balancing toward preseason preparations. We're mainly tuning a few things to be a little less lethal in the early/mid-game, other than Nami or Sion who should ideally die at least sometimes (up from never). 

That's it! Get back to climbing ranked and watching Worlds!"
</p><br>
<h2>Patch 8.19 notes</h2><br>
<p>"Welcome to the second round of changes focused on the World Championship, which starts next week! You might be wondering where the massive pro patch is this year—last year’s World’s patch had 23 changes, after all. This patch, rather than trimming power from the top picks in pro play we’ve been seeing, we’re going to be giving a few nudges to other champions that should help keep them in check. We don’t want to invalidate practice the pros have been putting in for the largest tournament of the year, so we’re just going to see if we can give them a few more options to consider. For buffs, we’re focusing on champions who could use a little extra power for competitive viability who also have some breathing room for the rest of us who haven't reached pro status (yet). We’ll follow up if anything gets out of hand.

We're also including a care package of visual and audio updates for a few older champions and effects. This should spruce things up both in your games and on your screens as you watch the tournament unfold. 

Let’s get into it."
</p><br>
<h2>Patch 8.18 Notes</h2><br>
<p>"8.18 brings us the first wave of changes focused on the World Championship later this year. In some cases, this means reining in outliers who are dominating pick-ban (as well as champs likely to take over once those outliers are addressed). Other times, it means buffing champs who are on the cusp of consideration—picks we nerfed earlier in the season, in a few cases. 8.19 will contain another round of these changes.

Back to the here and now, the Nexus Blitz alpha ends with 8.18, but we aren't leaving you high and dry. Odyssey, our newest event, is here, so join the crew and smash some space nerds!"
</p><br> -->