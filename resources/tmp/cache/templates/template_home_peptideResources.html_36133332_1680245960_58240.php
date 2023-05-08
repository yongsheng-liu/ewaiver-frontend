<?php
$this->title('Peptide Resources');
?>

<div class="peptide-resources-banner">
    <div class="peptide-resources-banner-text">Peptide Resources </div>
</div>

<div class="peptide-resources-content">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#handling" aria-controls="handling" role="tab" data-toggle="tab">Peptide handling</a></li>
        <li role="presentation"><a href="#modifications" aria-controls="modifications" role="tab" data-toggle="tab">Peptide modifications</a></li>
        <li role="presentation"><a href="#acids" aria-controls="acids" role="tab" data-toggle="tab">Amino acids</a></li>
        <li role="presentation"><a href="#antigen" aria-controls="antigen" role="tab" data-toggle="tab">Peptide antigen design</a></li>
        <li role="presentation"><a href="#properties" aria-controls="properties" role="tab" data-toggle="tab">Fluorophore properties</a></li>
    </ul>

    <div class="tab-content tab-content-box">
        <div role="tabpanel" class="tab-pane active" id="handling">
            <div class="handling-box">
                <ul class="resource-content-nav">
                    <li class="active"><a class="dissolvingCharged">Dissolving Charged Peptides</a></li>
                    <li><a class="dissolvingPeptides">Dissolving Peptides</a></li>
                    <li><a class="dissolvingUncharged">Dissolving Uncharged Peptides</a></li>
                    <li><a class="lyophilizedPeptides">Lyophilized Peptides Storage</a></li>
                    <li><a class="peptideSolubility">Peptide Solubility</a></li>
                    <li><a class="peptideStability">Peptide Stability and Degradation</a></li>
                </ul>
                <div class="resource-content">
                    <div class="resource-content-item active" id="dissolvingCharged">
                        <div class="resource-content-text">
                            A peptide is acidic if the overall net charge of the peptide is negative. For an acidic peptide, if the total 
                            number of charges of the peptide at pH 7 is greater than 25% of the total number of residues, add a small amount 
                            of 0.1M ammonium bicarbonate to dissolve the peptide and dilute it with water to the desired concentration. 
                            Make certain that the resulting pH of the peptide solution is about 7 and adjust the pH as needed.
                        </div>
                        <div class="resource-content-text">
                            A peptide is basic if the overall net charge of the peptide is positive. For a basic peptide, if the total 
                            number of charges of the peptide at pH 7 is between 10-25% of the total number of residues, add a small amount 
                            of 25% acetic acid to dissolve the peptide and dilute it with water to the desired concentration.
                        </div>
                        <div class="resource-content-text">
                            A peptide is considered neutral if the overall net charge of the peptide is zero. If the total number of 
                            charges is greater than 25% of the total number of residues, use the strategy described in section 1. If the 
                            total number of charges is between 10-25% of the total number of residues, use organic solvents as recommended 
                            elsewhere in this document.
                        </div>
                        <div class="resource-content-text">
                            If the total number of charges of a peptide is less than 10% of the total number of residues, use of organic 
                            solvents is recommended.
                        </div>
                    </div>
                    <div class="resource-content-item" id="dissolvingPeptides">
                        <div class="resource-content-text">
                        Dissolve peptides in 0.1% aqueous acetic acid to yield a target concentration of 1-5 mg/mL. Use sonication if necessary.
                        </div>
                        <div class="resource-content-text">
                        Small amounts of dilute(10%) aqueous acetic acid for basic peptide antigen or aqueous ammonia for acidic peptides may 
                        help dissolution of these peptides.
                        </div>
                        <div class="resource-content-text">
                        If peptides are still insoluble, add acetonitrile up to 20%(v/v), and use sonication to help dissolution.
                        </div>
                        <div class="resource-content-text">
                        Lyophilize any remaining insoluble peptides to remove water, acetic acid and acetonitrile. When the peptides are 
                        completely dry, add neat DMF or DMSO (dropwise) until the peptides are dissolved. Slowly dilute the solution with 
                        water to desired concentration. If precipitation occurs during dilution, add more DMF or DMSO (dropwise) to dissolve 
                        the precipitate.
                        </div>
                    </div>
                    <div class="resource-content-item" id="dissolvingUncharged">
                        <div class="resource-content-text">
                        A peptide is acidic if the overall net charge of the peptide is negative. For an acidic peptide, if the total number 
                        of charges of the peptide at pH 7 is greater than 25% of the total number of residues, add a small amount of 0.1M 
                        ammonium bicarbonate to dissolve the peptide and dilute it with water to the desired concentration. Make certain 
                        that the resulting pH of the peptide solution is about 7 and adjust the pH as needed.
                        </div>
                        <div class="resource-content-text">
                        A peptide is basic if the overall net charge of the peptide is positive. For a basic peptide, if the total number of 
                        charges of the peptide at pH 7 is between 10-25% of the total number of residues, add a small amount of 25% acetic acid 
                        to dissolve the peptide and dilute it with water to the desired concentration.
                        </div>
                        <div class="resource-content-text">
                        A peptide is considered neutral if the overall net charge of the peptide is zero. If the total number of charges is greater 
                        than 25% of the total number of residues, use the strategy described in section 1. If the total number of charges is between 
                        10-25% of the total number of residues, use organic solvents as recommended elsewhere in this document.
                        </div>
                        <div class="resource-content-text">
                        If the total number of charges of a peptide is less than 10% of the total number of residues, use of organic solvents is recommended.
                        </div>
                    </div>
                    <div class="resource-content-item" id="lyophilizedPeptides">
                        <div class="resource-content-text">
                        Lyophilized peptides are stable at room temperature for weeks. Upon arrival, always store lyophilized peptides in a freezer at 
                        – 20°C for maximum stability. For short-term storage, it is recommended to store peptides at 4°C.
                        </div>
                        <div class="resource-content-text">
                        Lyophilized peptides are often hydroscopic. For best results, maintain product for synthetic peptide in a dry environment. When 
                        preparing peptides for use or peptide antigen design for example, allow to equilibrate to room temperature before opening the 
                        container, reseal the vial quickly after weighing out desired quantity.
                        </div>
                    </div>
                    <div class="resource-content-item" id="peptideSolubility">
                        <div class="resource-content-text">Assign a value of -1 to each acidic residue (D, E, and C-terminal COOH)</div>
                        <div class="resource-content-text">Assign a value of +1 to each basic residue (K, R and the N-terminal NH2)</div>
                        <div class="resource-content-text">Assign a value of +1 to each H residue at pH<6 and zero at pH >6.</div>
                        <div class="resource-content-text">
                            Count the total number of charges of the peptide at pH 7 (all D, E, K, R, C-terminal COOH, and C-terminal NH2).
                        </div>
                        <div class="resource-content-text">Calculate the overall net charge of the peptide</div>
                    </div>
                    <div class="resource-content-item" id="peptideStability">
                        <div class="resource-content-text">Hydrolysis<br>
                            <i class="fa fa-angle-right"></i>Peptides containing Asp (D)<br>
                            <i class="fa fa-angle-right"></i>Sequence contains Asp-Pro (D-P)<br>
                            <i class="fa fa-angle-right"></i>Similarly, if Asp-Gly (D-G) is present in the sequence<br>
                            <i class="fa fa-angle-right"></i>Sequences containing Ser (S)<br>
                        </div>
                        <div class="resource-content-text">Deamidation sequences containing:<br>
                            <i class="fa fa-angle-right"></i>Asn-Gly (N-G)<br>
                            <i class="fa fa-angle-right"></i>Gln-Gly (Q-G)<br>
                            <i class="fa fa-angle-right"></i>Asp-Gly (D-G)<br>
                        </div>
                        <div class="resource-content-text">Oxidation<br>
                            <i class="fa fa-angle-right"></i>The Cys (C) and Met (M)<br>
                        </div>
                        <div class="resource-content-text">Diketopiperazine and pyroglutamic acid formation<br>
                            <i class="fa fa-angle-right"></i>Gly (G) is in the third position from the N-terminus<br>
                            <i class="fa fa-angle-right"></i>Pro (P) or Gly (G) is in position 1 or 2<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="modifications">
            <div class="modifications-box">
                <ul class="resource-content-nav">
                    <li class="active"><a class="antibody">Antibody Modifications</a></li>
                    <li><a class="fluorescent">Fluorescent Modifications</a></li>
                    <li><a class="fret">FRET Peptides</a></li>
                    <li><a class="cyclization">Peptide Cyclization</a></li>
                    <li><a class="standard">Standard Modifications</a></li>
                </ul>
                <div class="resource-content">
                    <div class="resource-content-item active" id="antibody">
                        <div class="resource-content-title">KLH, BSA, OVA Conjugates</div>
                        <div class="resource-content-text">
                        Peptide-protein conjugates are used for custom antibody production against peptides. Peptides alone are mostly too small to 
                        elicit a sufficient immune response, so carrier proteins containing many epitopes help to stimulate T-helper cells, which 
                        help induce the B-cell response. It is important to remember that the immune system reacts to the peptide-protein conjugate 
                        as a whole so there will always be a portion of antibodies to the peptide synthesis, the linker and the carrier protein.
                        </div>
                        <div class="resource-content-text" style="margin:0;">Among the most common carrier proteins one can find:</div>
                        <div class="resource-content-text" style="display:flex;margin:0;">
                            <i class="fa fa-angle-right"></i><div><strong>KLH (Keyhole Limpet Hemocyanin),</strong> a copper containing, non-heme protein 
                            found in arthropods and mollusca. It is isolated from Megathura crenulata and has a MW of 4.5 x 105 ~ 1.3 x 107 Da. 
                            KLH is the most commonly selected carrier due to its higher immunogenicity compared to BSA.</div>
                        </div>
                        <div class="resource-content-text" style="display:flex;margin:0;">
                            <i class="fa fa-angle-right"></i><div><strong>BSA (Bovine Serum Albumin),</strong> a plasma protein in cattle, belonging to 
                            the most stable and soluble albumins. It has a MW of 67 x 103 Da containing 59 lysines. About 30-35 of these primary amines 
                            are accessible for linker conjugation, which makes BSA a popular carrier protein for weak antigenic compounds. A
                            disadvantage of BSA is that it is used in many experiments as a blocking buffer reagent. If antisera against peptide-BSA 
                            conjugates are used in such assays, false positives can occur, because these sera also contain antibodies to BSA.</div>
                        </div>
                        <div class="resource-content-text" style="display:flex;">
                            <i class="fa fa-angle-right"></i><div><strong>OVA (Ovalbumin),</strong> a protein isolated from hen egg whites, with a MW 
                            of 45 x 103 Da. It is a good choice as second carrier protein to verify if antibodies are specific for the peptide alone 
                            and not the carrier protein (e.g. BSA).</div>
                        </div>

                        <div class="resource-content-title">MAPs (Multiple peptide antigen)</div>
                        <div class="resource-content-text">
                        MAPs are branched peptides that can be used for direct immunization to produce antibodies. MAPs are usually big enough to 
                        raise the immune response.
                        </div>
                        <div class="resource-content-text">
                        The antigenic peptide of interest is being synthesized directly on the branched MAP structure. MAPs are available as MAP 4 
                        (4 branches) or MAP 8 (8 branches) molecules:
                        </div>
                        <div class="resource-content-text">Schematic graph of a MAP 8 and a peptide-protein conjugate:</div>
                        <img src="../img/antibody.gif" />
                        <img src="../img/antibody2.gif" />
                        
                    </div>
                    <div class="resource-content-item" id="fluorescent">
                        <div class="resource-content-text">AMC (7-Amino-4-methyl-coumarin)</div>
                        <div class="resource-content-text">UV-excitable dye, used in enzyme assays using cuvettes or flow cytometry.</div>
                        <img src="../img/flu1.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>AMC</td>
                                <td>353 nm</td>
                                <td>422 nm</td>
                                <td>19.000</td>
                            </tr>
                        </table>
                        <hr/>
                        <div class="resource-content-title">Cy3, Cy5</div>
                        <div class="resource-content-text">
                        Cy3, Cy5 are dyes with extremely high extinction coefficients and fluorescence. Thus, they are especially suitable for very 
                        sensitive localization assays of peptides in cells. Their disadvantage is the high instability of the molecules under peptide 
                        synthesis conditions. Therefore the yields are comparatively low.
                        </div>
                        <img src="../img/flu2-e1500300527538.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Cy™3</td>
                                <td>550 nm</td>
                                <td>570 nm</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>Cy™5</td>
                                <td>650 nm</td>
                                <td>670 nm</td>
                                <td>250.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">Dabcyl</div>
                        <div class="resource-content-text">
                        Dabcyl is a non-fluorescent dye predominantly used as a quencher for other fluorophores (esp. Fluorescent type dyes, EDANS.). 
                        If Dabcyl is coupled to a peptide in close proximity to a fluorophore, it absorbs the emitted light of the fluorophore. 
                        Enlarging this distance (i.e. by enzymatic cleavage of the peptide) results in excitation of the fluorophore with an 
                        emission signal that can be detected.
                        </div>
                        <img src="../img/flu3.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Dabcyl</td>
                                <td>453 nm</td>
                                <td>none</td>
                                <td>32.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">Dansyl</div>
                        <div class="resource-content-text">
                        Dansyl is also used as a fluorophore quencher. Unlike Dabcyl, it inherits own fluorescence and thus might not be as useful 
                        for highly sensitive assays
                        </div>
                        <img src="../img/flu4.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Dansyl</td>
                                <td>335 nm</td>
                                <td>526 nm</td>
                                <td>4.600</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">2,4-Dinitrophenyl (DNP)</div>
                        <div class="resource-content-text">
                        2,4-Dinitropheny is a non-fluorescent dye that can be used as a fluorophore quencher (see Dabcyl for more details).
                        </div>
                        <img src="../img/flu5.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>DNP</td>
                                <td>348 nm</td>
                                <td>none</td>
                                <td>18.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">DNP-Lysine</div>
                        <div class="resource-content-text">
                        DNP-Lysineis a non-fluorescent dye that can be used as a fluorophore quencher, for custom peptide (see Dabcyl for more details).
                        </div>
                        <img src="../img/flu6.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>DNP-Lysine</td>
                                <td>348 nm</td>
                                <td>none</td>
                                <td>18.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">EDANS (5-((2-aminoethyl)amino)napthalene-1-sulfonic acid)</div>
                        <div class="resource-content-text">
                        EDANS is a commonly used dye in FRET (fluorescence resonance energy transfer) peptides in combination with Dabcyl as quencher.
                        </div>
                        <img src="../img/flu7.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>EDANS</td>
                                <td>335 nm</td>
                                <td>493 nm</td>
                                <td>5.900</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">Fluorescent</div>
                        <div class="resource-content-text">
                        Fluorescent is the commonly used fluorescent dye in confocal laser-scanning microscopy and flow cytometry applications.
                        </div>
                        <img src="../img/flu8.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Fluorescent</td>
                                <td>495 nm</td>
                                <td>520 nm</td>
                                <td>83.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">NBD (7-nitrobenz-2-oxa-1, 3-diazole)</div>
                        <div class="resource-content-text">NBD is a fluorescent dye, used for amine modification.</div>
                        <img src="../img/flu9.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>NBD</td>
                                <td>486 nm</td>
                                <td>543 nm</td>
                                <td>27.000</td>
                            </tr>
                        </table>
                        <hr/>

                        <div class="resource-content-title">p-Nitro-Aniline</div>
                        <div class="resource-content-text">p-Nitro-Aniline is a chromogen used as colorimetric enzyme substrate in many standard enzyme assays in cuvettes.</div>
                        <img src="../img/flu0.gif" />
                        <hr/>

                        <div class="resource-content-title">Rhodamine B</div>
                        <div class="resource-content-text">
                        Rhodamine B represents one among a numerous range of rhodamine dyes, used in fluorescent peptide assays.
                        </div>
                        <img src="../img/flu11.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Rhodamine</td>
                                <td>550 nm</td>
                                <td>580 nm</td>
                                <td>90.000</td>
                            </tr>
                        </table>
                        <hrr/>

                        <div class="resource-content-title">Tamra</div>
                        <div class="resource-content-text">Tamra is the most commonly used rhodamine dye in fluorescence assays.</div>
                        <img src="../img/flu10.gif" />
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Dye</td>
                                <td>Excitation maximum</td>
                                <td>Emission maximum</td>
                                <td>Molar Extinction Coefficient</td>
                            </tr>
                            <tr>
                                <td>Tamra</td>
                                <td>544 nm</td>
                                <td>576 nm</td>
                                <td>90.000</td>
                            </tr>
                        </table>
                    </div>
                    <div class="resource-content-item" id="fret">
                        <div class="resource-content-text">
                        FRET stands for fluorescence resonance energy transfer, or Förster resonance energy transfer. FRET is a mechanism describing 
                        excited state energy transfer from the initially excited donor to an acceptor. The donor molecules typically emit at shorter 
                        wavelengths that overlap with the absorption of acceptors. The process is a distance-dependent interaction between the 
                        electronic excited states of two molecules without emission of a photon.
                        </div>
                        <div class="resource-content-text">
                        FRET can be used for conformational investigation of peptide folding. FRET peptides are widely used as suitable substrates in 
                        enzyme studies, such as:
                        </div>
                        <div class="resource-content-text">
                            <i class="fa fa-angle-right"></i>Functional characterization of peptidases / proteases / kinases / phosphatases<br>
                            <i class="fa fa-angle-right"></i>Kinetic characterization of peptidases / proteases / kinases / phosphatases<br>
                            <i class="fa fa-angle-right"></i>Screening and detection of new proteolytic enzyme
                        </div>
                        <img src="../img/fretPeptides.gif" />
                        <div class="resource-content-title">Chromophore/Fluorophore – Quencher Pairs</div>
                        <table class="resource-table">
                            <tr class="title-line">
                                <td>Chromophore/Fluorophore</td>
                                <td>Lambda max (nm)</td>
                                <td>Lambda em (nm)</td>
                                <td>Quencher</td>
                            </tr>
                            <tr>
                                <td>MAC</td>
                                <td>432</td>
                                <td>441</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dabcyl</td>
                                <td>453</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dansyl</td>
                                <td>335</td>
                                <td>526</td>
                                <td>Dabcyl</td>
                            </tr>
                            <tr>
                                <td>Dnp</td>
                                <td>348</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>EDANS</td>
                                <td>341</td>
                                <td>471</td>
                                <td>Dabcyl</td>
                            </tr>
                            <tr>
                                <td>Mca</td>
                                <td>328</td>
                                <td>393</td>
                                <td>Dnp</td>
                            </tr>
                            <tr>
                                <td>FAM</td>
                                <td>494</td>
                                <td>518</td>
                                <td>Dabcyl</td>
                            </tr>
                            <tr>
                                <td>TAMRA</td>
                                <td>555</td>
                                <td>580</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Mca</td>
                                <td>Dpa</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </table>
                        <div class="resource-content-title">How does a quencher work?</div>
                        <div class="resource-content-text">
                        A quencher is very efficient at absorbing certain wavelengths. When near a dye that emits at the absorbed wavelength, the 
                        light is “quenched”, and no longer visible. Quenchers are very similar in structure to dyes. The difference is that they 
                        emit in undetectable ranges, or in undetectable amounts. The ability to quench is a function of distance from the dye in 
                        most cases. Molecular beacons are effective in that the quencher actually comes in contact with the dye. Different quenchers 
                        are best for different dyes.
                        </div>
                        <div class="resource-content-title">Can a dye be conjugated to protein or peptide internally?</div>
                        <div class="resource-content-text">
                        Yes. Use the succinimidyl ester version of the dye and conjugate it to either a N-terminal and Lysine side-chain amino linker. 
                        Other options include using a Lys-FAM or Lys-TAMRA for Solid Phase Peptide Synthesis. These dyes are already conjugated to
                        the Lys side-chain amino linker.
                        </div>
                        <div class="resource-content-title">What is the difference between a 5-FAM and FITC labeled protein and peptide?</div>
                        <div class="resource-content-text">
                        Both 5-FAM (5-carboxyfluorescein, single isomer) and FITC (fluorescein-5-isothiocyanate, isomers) are forms of the fluorescent 
                        dye fluorescein. FITC refers to a particular form of reactive species, the isothiocyanate, of the dye. It yields a urea linkage 
                        upon reaction with a primary amine. 5-FAM is the preferred reagent for labeling a protein or peptide. It results in an amide 
                        bond when reacted with a primary amine. The chemistry is more robust and better yielding. Furthermore, it has been shown that 
                        5-FAM is less susceptible to photo-bleaching. The 5-FAM and FITC conjugated protein and peptide have similar spectral properties.
                        </div>
                        <div class="resource-content-title">Can I use a dye or modification that is not listed here?</div>
                        <div class="resource-content-text">
                            Yes. Tell us the dye or modification you are looking to use; we will find out if it is commercially available. If it is not, 
                            there is a possibility we can make it in-house. If neither of these is an option we will do our best to see if there is 
                            another dye or modification that can give you similar results. If any of these options work for you, we will then send you 
                            a quotation.
                        </div>
                        <div class="resource-content-title">What are the absorption max and emission max values for my fluorescent labeled protein or peptide?</div>
                        <div class="resource-content-text">
                        Spectra data can be found (click here). These values are provided by the manufacturer of the fluorescent dye and are generally 
                        calculated from the free dye not attached to a protein or peptide. As a general rule, these values work fine for the common 
                        protein or peptide user as there is little change, if any at all, when the dye is attached to a protein or peptide. 
                        The particular base composition of a protein or peptide can play a role as can pH in many cases, particular fluorescein and 
                        related dyes.
                        </div>
                        <div class="resource-content-title">Can you make a peptide with two different dyes or other conjugate?</div>
                        <div class="resource-content-text">
                        The answer is complicated in that there are many ways to place different conjugations on a peptide, but we are still limited 
                        by what is available to us for conjugation and compatibility issues. The easiest way is if one or both of the conjugates are 
                        available as thiol of cysteine and/or support bound reagents. If at least one reagent is available, the other conjugate can 
                        often be attached through a primary amine at the other end of the peptide. Chemical compatibility is avoided in this case. 
                        If neither conjugate is available as a thiol of cysteine or support bound reagent, then we often will use an orthogonal 
                        linker scheme incorporating both a thiol linker and an amino linker. This requires that one of the conjugates is available 
                        as a maleimide, which is thiol specific under neutral pH conditions. Most of all the commonly used dyes are available in 
                        both the succinimidyl and maleimidyl ester forms. The most common, such as fluorescein, TET, HEX, TAMRA, Cy™5 and Cy3 are 
                        also available as primary amine or support bound reagents. We will help you design your specific peptide when you place your 
                        order. Also, see our Products section on dyes for more information on what is available.
                        </div>

                    </div>
                    <div class="resource-content-item" id="cyclization">
                        <img src="../img/cycle.gif" />
                        <div class="resource-content-title">Different modes of cyclization for peptides:</div>
                        <div class="resource-content-text">
                        Left: Conventional cyclization<br>
                        Right: Backbone cyclization with all possible connections to backbone amides
                        </div>
                    </div>
                    <div class="resource-content-item" id="standard">
                        <div class="resource-content-title">Biotin and Desthiobiotin</div>
                        <div class="resource-content-text">
                        Biotin (or vitamin H) is a small biologically active molecule with a molecular weight of 244.31 Da. It acts as a co-enzyme in 
                        living cells. With its highly specific affinity towards streptavidin, it is used in various biotechnology assays &peptide 
                        synthesis for quality and quantity testing.
                        </div>
                        <div class="resource-content-text">
                        Desthiobiotin: Binds to streptavidin but can be displaced by biotin. Useful when you need to get your peptide out of a binding 
                        experiment. THE molecular weight: 214.31 Da.
                        </div>
                        <img src="../img/modif1.gif"/>
                        <div class="resource-content-title">Farnesyl</div>
                        <div class="resource-content-text">Farnesyl is a potential substrate to study demethylase activity in enzyme assays.</div>
                        <img src="../img/modif3.gif"/>
                        <div class="resource-content-title">Formic acid (Formyl)</div>
                        <img src="../img/modif4.gif"/>
                        <div class="resource-content-title">Myristic acid (Myristoyl)</div>
                        <img src="../img/modif5.gif"/>
                        <div class="resource-content-title">Palmitic acid (Palmitoyl)</div>
                        <img src="../img/modif6.gif"/>
                        <div class="resource-content-title">Stearic acid (Stearyl)</div>
                        <img src="../img/modif7.gif"/>
                        <div class="resource-content-title">Phosphorylation Peptide Modification</div>
                        <div class="resource-content-text">
                        Phosphorylationof Ser, Thr and Tyr is one of the more common modifications of amino acids in nature. Many hormones can adapt 
                        the activity of specific enzymes by increasing their phosphorylation state of Ser or Thr residues. Growth factors (like insulin) 
                        can trigger phosphorylation of Tyr.
                        </div>
                        <div class="resource-content-text">
                        The phosphate groups on these amino acids can be quickly removed, thus Ser, Thr and Tyr function as molecular switches during 
                        regulation of cellular processes (e.g. cancer proliferation).
                        </div>
                        <img src="../img/modif8.gif"/>
                        <div class="resource-content-title">Succinic acid (Succinyl)</div>
                        <img src="../img/modif10.gif"/>
                        <div class="resource-content-title">Sulfurylation</div>
                        <div class="resource-content-text">
                        Sulfurylation at Ser, Thr and Tyr is another Peptide Modification of amino acids in nature. Activity of many enzymes depends on 
                        the oxidation state of SH-groups in these residues.
                        </div>
                        <img src="../img/modif9.gif"/>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="acids">
            <div class="resource-content" style="padding:0;width:100%">
                <table>
                    <tr>
                        <td colspan="2" rowspan="2"></td>
                        <td colspan="4" class="mark-text">2nd base</td>
                    </tr>
                    <tr>
                        <td class="mark-text">U</td>
                        <td class="mark-text">C</td>
                        <td class="mark-text">A</td>
                        <td class="mark-text">G</td>
                    </tr>
                    <tr>
                        <td rowspan="4" class="mark-text">1st base</td>
                        <td class="mark-text">U</td>
                        <td>
                            UUU (Phe/F)Phenylalanine<br>
                            UUC (Phe/F)Phenylalanine<br>
                            UUA (Leu/L)Leucine<br>
                            UUG (Leu/L)Leucine
                        </td>
                        <td>
                            UCU (Ser/S)Serine<br>
                            UCC (Ser/S)Serine<br>
                            UCA (Ser/S)Serine<br>
                            UCG (Ser/S)Serine
                        </td>
                        <td>
                            UAU (Tyr/Y)Tyrosine<br>
                            UAC (Tyr/Y)Tyrosine<br>
                            UAA Ochre (Stop)<br>
                            UAG Amber (Stop)
                        </td>
                        <td>
                            UGU (Cys/C)Cysteine<br>
                            UGC (Cys/C)Cysteine<br>
                            UGA Opal (Stop)<br>
                            UGG (Trp/W)Tryptophan
                        </td>
                    </tr>
                    <tr>
                        <td class="mark-text">C</td>
                        <td>
                            CUU (Leu/L)Leucine<br>
                            CUC (Leu/L)Leucine<br>
                            CUA (Leu/L)Leucine<br>
                            CUG (Leu/L)Leucine
                        </td>
                        <td>
                            CCU (Pro/P)Proline<br>
                            CCC (Pro/P)Proline<br>
                            CCA (Pro/P)Proline<br>
                            CCG (Pro/P)Proline
                        </td>
                        <td>
                            CAU (His/H)Histidine<br>
                            CAC (His/H)Histidine<br>
                            CAA (Gln/Q)Glutamine<br>
                            CAG (Gln/Q)Glutamine
                        </td>
                        <td>
                            CGU (Arg/R)Arginine<br>
                            CGC (Arg/R)Arginine<br>
                            CGA (Arg/R)Arginine<br>
                            CGG (Arg/R)Arginine
                        </td>
                    </tr>
                    <tr>
                        <td class="mark-text">A</td>
                        <td>
                            AUU (Ile/I)Isoleucine<br>
                            AUC (Ile/I)Isoleucine<br>
                            AUA (Ile/I)Isoleucine<br>
                            AUG (Met/M)Methionine, (Start)
                        </td>
                        <td>
                            ACU (Thr/T)Threonine<br>
                            ACC (Thr/T)Threonine<br>
                            ACA (Thr/T)Threonine<br>
                            ACG (Thr/T)Threonine
                        </td>
                        <td>
                            AAU (Asn/N) Asparagine<br>
                            AAC (Asn/N)Asparagine<br>
                            AAA (Lys/K)Lysine<br>
                            AAG (Lys/K)Lysine
                        </td>
                        <td>AGU (Ser/S) Serine<br>
                            AGC (Ser/S)Serine<br>
                            AGA (Arg/R) Arginine<br>
                            AGG (Arg/R)Arginine
                        </td>
                    </tr>
                    <tr>
                        <td class="mark-text">G</td>
                        <td>
                            GUU (Val/V)Valine<br>
                            GUC (Val/V)Valine<br>
                            GUA (Val/V)Valine<br>
                            GUG (Val/V)Valine
                        </td>
                        <td>
                            GCU (Ala/A)Alanine<br>
                            GCC (Ala/A)Alanine<br>
                            GCA (Ala/A)Alanine<br>
                            GCG (Ala/A)Alanine
                        </td>
                        <td>
                            GAU (Asp/D)Aspartic acid<br>
                            GAC (Asp/D)Aspartic acid<br>
                            GAA (Glu/E)Glutamic acid<br>
                            GAG (Glu/E)Glutamic acid
                        </td>
                        <td>
                            GGU (Gly/G)Glycine<br>
                            GGC (Gly/G)Glycine<br>
                            GGA (Gly/G)Glycine<br>
                            GGG (Gly/G)Glycine
                        </td>
                    </tr>
                </table>
                <hr/>
                <div class="resource-content-title">Reverse Codon Table</div>
                <div class="resource-content-text">This table shows the 20 standard amino acids used in proteins, and the codons that code for each amino acid.</div>
                <table>
                    <tr>
                        <td><strong>Ala</strong></td>
                        <td>A</td>
                        <td>GCU, GCC, GCA, GCG</td>
                        <td><strong>Leu</strong></td>
                        <td>L</td>
                        <td>UUA, UUG, CUU, CUC, CUA, CUG</td>
                    </tr>
                    <tr>
                        <td><strong>Arg</strong></td>
                        <td>R</td>
                        <td>CGU, CGC, CGA, CGG, AGA, AGG</td>
                        <td><strong>Lys</strong></td>
                        <td>K</td>
                        <td>AAA, AAG</td>
                    </tr>
                    <tr>
                        <td><strong>Asn</strong></td>
                        <td>N</td>
                        <td>AAU, AAC</td>
                        <td><strong>Met</strong></td>
                        <td>M</td>
                        <td>AUG</td>
                    </tr>
                    <tr>
                        <td><strong>Asp</strong></td>
                        <td>D</td>
                        <td>GAU, GAC</td>
                        <td><strong>Phe</strong></td>
                        <td>F</td>
                        <td>UUU, UUC</td>
                    </tr>
                    <tr>
                        <td><strong>Cys</strong></td>
                        <td>QC</td>
                        <td>UGU, UGC</td>
                        <td><strong>Pro</strong></td>
                        <td>P</td>
                        <td>CCU, CCC, CCA, CCG</td>
                    </tr>
                    <tr>
                        <td><strong>Gln</strong></td>
                        <td>Q</td>
                        <td>CAA, CAG</td>
                        <td><strong>Ser</strong></td>
                        <td>S</td>
                        <td>UCU, UCC, UCA, UCG, AGU,AGC</td>
                    </tr>
                    <tr>
                        <td><strong>Glu</strong></td>
                        <td>E</td>
                        <td>GAA, GAG</td>
                        <td><strong>Thr</strong></td>
                        <td>T</td>
                        <td>ACU, ACC, ACA, ACG</td>
                    </tr>
                    <tr>
                        <td><strong>Gly</strong></td>
                        <td>G</td>
                        <td>GGU, GGC, GGA, GGG</td>
                        <td><strong>Trp</strong></td>
                        <td>W</td>
                        <td>UGG</td>
                    </tr>
                    <tr>
                        <td><strong>His</strong></td>
                        <td>H</td>
                        <td>CAU, CAC</td>
                        <td><strong>Tyr</strong></td>
                        <td>Y</td>
                        <td>UAU, UAC</td>
                    </tr>
                    <tr>
                        <td><strong>Ile</strong></td>
                        <td>I</td>
                        <td>AUU, AUC, AUA</td>
                        <td><strong>Val</strong></td>
                        <td>V</td>
                        <td>GUU, GUC, GUA, GUG</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Start</strong></td>
                        <td>AUG</td>
                        <td colspan="2"><strong>Stop</strong></td>
                        <td>UAG, UGA, UAA</td>
                    </tr>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="antigen">
            <div class="resource-content" style="padding:0;width:100%">
                <div class="resource-content-text">
                In general, a good peptide antigen has the following properties: protein surface location, flexible (usually loop) rather than helical 
                structure, complicate and unique sequence, not a post-translational modification site or functional site (unless the antibody is 
                intended to recognize such a site) and easy for synthesis. But the quantitative relationship between these properties and antigenic 
                strength is not clear
                </div>
                <div class="resource-content-text">
                Peptide antigen design is usually done by two different approaches: predicting peptide’s physical-chemistry properties or making 
                prediction based on statistic results. Both approaches have their limitations. Physical chemistry properties such as peptide location 
                in a protein or its secondary structure, particular turn, are difficult to be predicted with high degree of accuracy. This is because 
                the problem themselves are parts of one of the most challenge areas of modern science —- protein folding. Another problem is that in 
                most cases, an isolated peptide in solution can not maintain its native conformation found in the protein. This is the major reason 
                that antigens designed based on known 3D structures are also often failed.
                </div>
                <div class="resource-content-text">
                Although Cys residues are often added to peptides to enable crosslinking to a carrier protein, a peptide synthesized with many Cys 
                residues present can be difficult to handle and may not lead to a useful antibody. Multiple Cys residues may lead to the formation of 
                covalently linked aggregates. The Cys-rich regions of proteins may have some disulfide bonds. The linear peptide with reduced Cys would 
                therefore not represent the protein itself, which would be more structurally constrained.
                </div>
                <div class="resource-content-text">
                Most peptide antigen requested range in length from 12 to 20 residues and are relatively easy to synthesize. No Cys residues should be 
                internal to the peptide sequence.
                </div>
                <img src="../img/antigen.gif" />
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="properties">
            <div class="resource-content" style="padding:0;width:100%">
                <div class="resource-content-title">Fluorophores Absorption and Emission Data</div>
                <div class="resource-content-text">
                The table lists the properties of the most commonly used fluorophore for peptide labeling of your interest in the life sciences. The 
                fluorophores absorbance wavelength from 325nm to 743nm (from blue color to red color), the emission wavelength from 386nm to 770nm.
                </div>
                <img src="../img/image_fluorescence.gif" />
                <table class="resource-table">
                    <tr class="title-line">
                        <td>Fluorophore Dyes</td>
                        <td>Ex (nm)	</td>
                        <td>Em (nm)	</td>
                    </tr>
                    <tr> <td>Hydroxycoumarin</td> <td>325</td> <td>386</td> </tr>
                    <tr> <td>Dansyl</td> <td>340</td> <td>578</td> </tr>
                    <tr> <td>7-Amino-4-methylcoumarin</td> <td>351</td> <td>430</td> </tr>
                    <tr> <td>methoxycoumarin</td> <td>360</td> <td>410</td> </tr>
                    <tr> <td>Alexa fluor</td> <td>345</td> <td>442</td> </tr>
                    <tr> <td>aminocoumarin</td> <td>350</td> <td>445</td> </tr>
                    <tr> <td>MAC</td> <td>345</td> <td>445</td> </tr>
                    <tr> <td>Dabcyl</td> <td>453</td> <td>-</td> </tr>
                    <tr> <td>Cy2</td> <td>490</td> <td>510</td> </tr>
                    <tr> <td>FAM</td> <td>495</td> <td>517</td> </tr>
                    <tr> <td>Alexa fluor 488</td> <td>494</td> <td>517</td> </tr>
                    <tr> <td>Fluorescein FITC</td> <td>495</td> <td>519</td> </tr>
                    <tr> <td>Alexa fluor 430</td> <td>430</td> <td>545</td> </tr>
                    <tr> <td>5-Carboxyfluorescein (5-FAM)</td> <td>492</td> <td>518</td> </tr>
                    <tr> <td>Alexa fluor 532</td> <td>530</td> <td>555</td> </tr>
                    <tr> <td>HEX</td> <td>535</td> <td>556</td> </tr>
                    <tr> <td>5-TAMRA</td> <td>542</td> <td>568</td> </tr>
                    <tr> <td>Cy3</td> <td>550</td> <td>570</td> </tr>
                    <tr> <td>TRITC</td> <td>547</td> <td>572</td> </tr>
                    <tr> <td>Alexa fluor 546</td> <td>556</td> <td>573</td> </tr>
                    <tr> <td>Alexa fluor 555</td> <td>556</td> <td>573</td> </tr>
                    <tr> <td>Dansyl</td> <td>340</td> <td>578</td> </tr>
                    <tr> <td>R-phycoerythrin (PE)</td> <td>(489)</td> <td>565</td> </tr>
                    <tr> <td>Rhodamine Red-X</td> <td>560</td> <td>580</td> </tr>
                    <tr> <td>Tamara	</td> <td>565</td> <td>580</td> </tr>
                    <tr> <td>Cy3</td> <td>(512)</td> <td>550</td> </tr>
                    <tr> <td>Cy3.5</td> <td>581</td> <td>596</td> </tr>
                    <tr> <td>Rox</td> <td>575</td> <td>602</td> </tr>
                    <tr> <td>Alexa fluor 568</td> <td>578</td> <td>603</td> </tr>
                    <tr> <td>Texas Red</td> <td>589</td> <td>615</td> </tr>
                    <tr> <td>Alexa fluor 594</td> <td>590</td> <td>617</td> </tr>
                    <tr> <td>Alexa fluor</td> <td>621</td> <td>639</td> </tr>
                    <tr> <td>Alexa fluor 633</td> <td>650</td> <td>668</td> </tr>
                    <tr> <td>Cy5</td> <td>(625)</td> <td>650</td> </tr>
                    <tr> <td>Alexa fluor 660</td> <td>663</td> <td>690</td> </tr>
                    <tr> <td>Cy5.5</td> <td>675</td> <td>694</td> </tr>
                    <tr> <td>TruRed</td> <td>490; 675</td> <td>695</td> </tr>
                    <tr> <td>Alexa fluor 680</td> <td>679</td> <td>702</td> </tr>
                    <tr> <td>Cy7</td> <td>743</td> <td>767</td> </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="/contact"><div class="up-triangle"><img src="../img/contact-icon.png"/></div></a>

<script>
    $('.resource-content-nav li a').click(function() {
        $(this).parents('.resource-content-nav').children('li').removeClass('active');
        $(this).parent().addClass('active');
        let className = $(this)[0].className;
        let se = '.tab-content .resource-content #' + className;
        $(se).siblings().removeClass('active');
        $(se).addClass('active')
    })
        


</script>
