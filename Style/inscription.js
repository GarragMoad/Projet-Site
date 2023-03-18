let envoi = document.getElementById('Envoi_Formulaire');
envoi.addEventListener('click', testDonnees);
function testDonnees(e){
    var MDP1 = document.getElementById('m_password').value;
    var MDP2 = document.getElementById('m_password-confirm').value;
    if(MDP1!=MDP2)
    {
        alert("Les mots de passes ne sont pas identiques");
        e.preventDefault();
    }
   
}
