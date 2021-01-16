<?php
/**
 * 
 * This mini system is a Blog System.
 * The content of the Blog focuses mainly on basic English Language. 
 * 
 * @author Anjanette Castillo, Gillian Carballo, Irenic Danae Atun
 */
class Menu{
    
    public $menu;

    public function __construct($menu){
        $this->menu = $menu;
    }
    public function menumethod(){
        switch($this->menu){
            case 'noun':
                $output = "noun";
                break;
            case 'verb':
                $output = "verb";
                break;
            case 'pronoun':
                $output = "pronoun";
                break;
            
            default:
            $output = "Error";
                break;
        }
        return $output;
    }
}

class Description extends Menu{
    public function descriptionmethod(){
        switch($this->menu){
            case 'noun':
                $meaning = "noun is a word (other than a pronoun) used to identify 
                any of a class of people, places, or things (common noun),
                or to name a particular one of these (proper noun)";
                break;
            case 'verb':
                $meaning = "verb is a word used to describe an action, state,
                or occurrence, and forming the main part of the predicate of
                a sentence";
                break;
            case 'pronoun':
                $meaning = "pronoun is a word that can function by itself as a noun phrase
                and that refers either to the participants in the discourse (e.g., I, you)
                or to someone or something mentioned elsewhere in the discourse (e.g., she, it, this)";
                break;
            
            default:
            $meaning = "Error";
                break;
        }
        return $meaning;
    }
}

class Types extends Menu{
    public function typesmethod(){
        switch($this->menu){
            case 'noun':
                $ty = " TYPES OF NOUNS <br>
                1.) Common Nouns - name people, places, or things that are not specific
                <br>
                2.) Proper Nouns - name specific people, places, or things
                <br>
                3.) Abstract Nouns - name nouns that you can't perceive with your five senses
                <br>
                4.) Concrete Nouns - name nouns that you can perceive with your five senses
                <br>
                5.) Countable Nouns - name nouns that you can count
                <br>
                6.) Uncountable Nouns - name nouns that you can't count
                <br>
                7.) Compound Nouns - are made up of two or more words
                <br>
                8.) Collective Nouns - refer to things or people as a unit
                <br>
                9.) Singular Nouns - name one person, place, thing, or idea
                <br>
                10.) Plural Nouns - name more than one person, place, thing or idea
                <br>
                11.) Possessive Nouns - show ownership";
                break;
            case 'verb': 
                $ty = "TYPES OF VERB <br>
                1.) Action Verb - are words that express action or possession 
                <br>
                2.) Linking Verb - connects the subject of a sentence to a noun or adjective that renames or describes the subject
                <br>
                3.) Helping Verb - are used before action or linking verbs to convey additional information regarding aspects of possibility or time";
                break;
            case 'pronoun':
                $ty = "TYPES OF PRONOUNS <br>
                1.) Possessive Pronouns - are personal prnouns that also indiccate possession of something 
                <br>
                2.) Reflexive Pronouns - when a subject performs an action on itself, the sentence uses a reflexive pronoun after the verb
                <br>
                3.)Reciprocal Pronouns - are similar to reflexive pronouns, but they involve groups of two or more that perform the same action with one another
                <br>
                4.) Relative Pronouns - starts a clause. Who, that, and which are all relatiev pronouns
                <br>
                5.) Demonstrative Pronouns - point our or modify a person or thing
                <br>
                6.) Interrogative Pronouns - begin questions
                <br>
                7.) Indefinite pronouns - refer to people or things, but they don't have a specific person or thing to reference";
                break;
            default: 
                $ty = "Error";
                break;
        }
        return $ty;
    }
}

class Examples extends Menu{
    public function examplesmethod(){
        switch($this->menu){
            case 'noun': $ex = "EXAMPLES: <br>
                 1.) Common Nouns - man, mountain, state, ocean, country, building , cat, airline
                <br>
                2.) Proper Nouns - Walt Disney, Mount Kilimanjaro, Minnesota, Atlantic Ocean, Australia, Empire State Building, Fluffy, Sun Country
                <br>
                3.) Abstract Nouns - love, wealth, happiness, pride, fear, religion, belief, histroy, communication
                <br>
                4.) Concrete Nouns - house, ocean, bird, photograph, banana, eyes, light, sun, dog, suitcase, flowers
                <br>
                5.) Countable Nouns - bed, cat, movie, train, country, book, phone, match, speaker, clock, pen, violin
                <br>
                6.) Uncountable Nouns - milk, rice, snow, rain, water, food, music, luggage
                <br>
                7.) Compound Nouns - tablecloth, eyeglasses, New York, photograph, daughter-in-law, pigtails, sunlight, snowflake, 
                <br>
                8.) Collective Nouns - bunch, audience, flock, team, group, family, village
                <br>
                9.) Singular Nouns - cat, sock, ship, hero, monkey, baby, match
                <br>
                10.) Plural Nouns - cats, socks, ships, heroes, monkeys, babies, matches
                <br>
                11.) Possessive Nouns - Mom's car, Beth's cat, the student's book";
                break;
            case 'verb': $ex = "EXAMPLES: <br>
                1.) Action Verb - give, eat, walk, have, own 
                <br>
                2.) Linking Verb - am, are, is, was, were
                <br>
                3.) Helping Verb - can, could, was, did, has";
                break;
            case 'pronoun': $ex = "EXAMPLES: <br>
                1.) Possessive Pronoun - mine, yours, his, hers, ours, theirs
                <br>
                2.) Reflexive Pronoun - myself, yourself, himself, herself, itself, oneself, ourselves, yourselves, themselves
                <br>
                3.) Reciprocal Pronoun - each other, one another
                <br>
                4.) Relative Pronoun - that, which, who, whose, whom, where, when
                <br>
                5.) Demonstrative Pronoun - this, that, these, those
                <br>
                6.) Interrogative Pronoun - who, what, why, where, when
                <br>
                7.) Indefinite Pronoun - anything, anybody, anyone, something, somebody, someone, nothing, nobody, none, no one";
                break;
            default:
                $ex = "Error";
                break;
        }
        return $ex;
    }
}


?>