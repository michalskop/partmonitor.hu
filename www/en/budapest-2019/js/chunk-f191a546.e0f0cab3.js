(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-f191a546","chunk-42e275e4","chunk-a751e1b2"],{"0418":function(e,t,i){"use strict";i.r(t);var s=i("c275"),o=i("ad21");for(var n in o)"default"!==n&&function(e){i.d(t,e,(function(){return o[e]}))}(n);var a=i("2877"),r=Object(a["a"])(o["default"],s["a"],s["b"],!1,null,null,null);t["default"]=r.exports},"2e93":function(e,t){},"54c5":function(e,t,i){"use strict";i.r(t);var s=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",[i("component-header"),i("div",{staticClass:"selection"},[i("h4",{staticClass:"p-2"},[e._v("\n            "+e._s(e.$t("select_extra_important_questions"))+"\n        ")]),i("button",{staticClass:"btn btn-outline-secondary btn-lg btn-block mb-3",on:{click:function(t){return e.goResults()}}},[e.spinning?i("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):i("span",[e._v(">")]),e._v("\n                "+e._s(e.$t("skip"))+"\n            "),e.spinning?i("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):i("span",[e._v(">")])],1),e._l(e.questions,(function(t){return e.answered[t.id]?i("div",{staticClass:"list-group"},[i("div",{staticClass:"list-group-item list-group-item-action flex-column align-items-start"},[i("label",{staticClass:"custom-control custom-checkbox"},[i("input",{directives:[{name:"model",rawName:"v-model",value:e.checked[t.id],expression:"checked[question.id]"}],staticClass:"custom-control-input",attrs:{type:"checkbox"},domProps:{checked:Array.isArray(e.checked[t.id])?e._i(e.checked[t.id],null)>-1:e.checked[t.id]},on:{change:[function(i){var s=e.checked[t.id],o=i.target,n=!!o.checked;if(Array.isArray(s)){var a=null,r=e._i(s,a);o.checked?r<0&&e.$set(e.checked,t.id,s.concat([a])):r>-1&&e.$set(e.checked,t.id,s.slice(0,r).concat(s.slice(r+1)))}else e.$set(e.checked,t.id,n)},function(t){return e.storeWeights()}]}}),i("span",{staticClass:"custom-control-indicator"}),i("div",{staticClass:"custom-control-description"},[i("div",{staticClass:"d-flex w-100 justify-content-between"},[i("h5",{staticClass:"mb-1"},[e._v(e._s(t.name)+" ("+e._s(e.answers[t.id])+")")])]),i("small",{staticClass:"mb-1 text-muted"},[e._v("\n                            "+e._s(t.question)+"\n                        ")])])])])]):e._e()})),i("button",{staticClass:"btn btn-success btn-lg btn-block mt-3",on:{click:function(t){return e.goResults()}}},[e.spinning?i("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):i("span",[e._v(">")]),e._v("\n                "+e._s(e.$t("result"))+"\n            "),e.spinning?i("font-awesome-icon",{staticClass:"fa-spin",attrs:{icon:"spinner"}}):i("span",[e._v(">")])],1)],2),i("component-footer")],1)},o=[],n=i("7842"),a=i("0418"),r=i("fd2d"),d=i("ecee"),c=i("c074"),h=i("ad3d");d["c"].add(c["b"]);var l={data:function(){for(var e={},t=0;t<n.length;t++)e[n[t].id]=!1;var i={},s={},o=JSON.parse(this.$route.query.q);for(var a in n){var r=n[a];Math.abs(o[parseInt(r.id)])>0?(i[r.id]=!0,this.$store.state.answers[parseInt(r.id)]=o[parseInt(r.id)]):i[r.id]=!1,-1===o[parseInt(r.id)]&&(s[r.id]=this.$t("no")),1===o[parseInt(r.id)]&&(s[r.id]=this.$t("yes"))}return{questions:n,answered:i,answers:s,checked:e,spinning:!1}},methods:{addChecked:function(){this.checked.push({question_id:!1})},storeWeights:function(){this.$store.commit("storeWeights",this.checked)},goResults:function(){this.spinning=!0,this.$router.push({path:"/results",query:{q:JSON.stringify(this.$store.state.answers),w:JSON.stringify(this.$store.state.weights)}})}},components:{"component-header":a["default"],"component-footer":r["default"],"font-awesome-icon":h["a"]}},u=l,p=(i("c985"),i("2877")),m=Object(p["a"])(u,s,o,!1,null,"86268d50",null);t["default"]=m.exports},7842:function(e){e.exports=JSON.parse('[{"id":"101","name":"Mobile dam at Római part","question":"A mobile dam should be built on the Római shore.","description":"Some say that regular floods of the Danube cause immense damages for people living at the Római shore, as well as for the apartment buildings located there, therefore, a mobile dam system is needed. Others think that the dam is a way of spending taxpayers\' money to protect illegal residents of the floodplain, and it would destroy the natural river shore. They suggest refurbishing the old dam system instead.","order":1},{"id":"102","name":"Liget project","question":"Construction works at Városliget has to be finished according to the current plans.","description":"Supporters of the project say that creating a museum district at Városliget would improve the situation of museums in Budapest, and would serve as a new tourist attraction. Others think that the area of Városliget should not be taken over by huge buldings and tourists, but should serve as a public park. This is the last chance to stop the construction.","order":2},{"id":"103","name":"Piers (Rakpart)","question":"In the inner districts of Pest and Buda, the pier should be left to pedestrians and a direct connection between the city and the river should be established.","description":"Many people find it unacceptable that opportunities offered by the Danube remain unexploited in the inner city, due to the heavy traffic along the river. Others think the piers serve as essential traffic routes of the city. ","order":3},{"id":"104","name":"Architectural heritage","question":"Regulation protecting architectural heritage in Budapest should become stricter.","description":"Some say there needs to be tighter control over the preservation of Budapest\'s architectural heritage (e.g. insulation reconstruction, demolishing and restoring old buildings in a professional manner), even if it goes against the interests of investors. Others say that protecting monuments cannot act as a barrier to city- and property development.","order":4},{"id":"105","name":"Congestion charge","question":"A congestion charge should be introduced as soon as possible.","description":"Budapest agreed to introduce an extra fee to reduce traffic. Some say this extra fee is an ideal solution to reduce traffic and protect the environment in and around Budapest. Others say such a fee is not realistic since there is no proper infrastructure in place, and as such it could lead to chaos in the city\'s traffic.","order":5},{"id":"106","name":"Cycle path on the Ring","question":"On the big ring (Nagykörút) there should be a cycle path separated from pedestrians and car traffic.","description":"In Budapest, the number of cyclists keeps growing each year. According to organizations representing the interests of cyclists, building a bike path along the Nagykörút is essential. Others say such a path cannot be built, taking into consideration current traffic conditions, and the fact that traffic and parking would become much more cumbersome.","order":6},{"id":"107","name":"BKK (public transportation) outsourcing","question":"The outsourcing of BKK bus services to external service providers should be continued.","description":"It is possible to modernize the public transportation car park by outsourcing the lines to external service providers as they themselves are responsible for the new vehicles. Others say on the long run it costs more to the city than buying new buses and makes the drivers more vulnerable.","order":7},{"id":"108","name":"Car free Chain Bridge","question":"Car traffic on the Chain Bridge should be banned.","description":"A pedestrian bridge on the Danube is often discussed. Some say that the renovations of the Chain Bridge, scheduled for fall of this year, could provide an excellent opportunity to transform the bridge into one solely for pedestrians. Others say the bridge is essential for car traffic.","order":8},{"id":"109","name":"Social housing","question":"More rental flats owned by the city administration (social housing program) are needed.","description":"Some say Budapest should develop a social housing program and increase the number of properties owned by the city in order to make sure those in need have adequate housing. Others say it is not the city\'s competence (but the districts\' or government\'s) to deal with housing issues.","order":9},{"id":"110","name":"Ban on homeless people","question":"Homelessness is primarily a police matter.","description":"Some think that people living on the streets negatively impact the picture of a city. Others think that criminalizing homelessness is not the right approach to this problem. Rather, the root of the problem has to be addressed by providing adequate housing.","order":10},{"id":"111","name":"Pride","question":"The Budapest Pride is an important symbol of the city\'s diversity, the capital must openly support it.","description":"Some say that Budapest Pride is an important symbol of the city\'s diversity, therefore, the city\'s leadership has to support it openly. Others think that the event in itself is a good enough indicator of diversity, while yet others are against it.","order":11},{"id":"112","name":"Centralization","question":"The mayor and the municipality need more competences from the government.","description":"Since 2010 the competencies of the city and the district municipalities are weakened. Some say the government is better manager of some tasks (eg. operating schools, hospitals). Others say the mayor should fight for broader powers and step up against centralization.","order":12},{"id":"113","name":"Transparency","question":"Only those contracts should enter into force at the Municipal Administration of Budapest, which were previously published on the Internet.","description":"Budapest is among the more transparent municipalities: the documents required by law are published on its website. Some say however the city should aim for transparency commitments above the legal obligation.","order":13},{"id":"114","name":"Drug issues","question":"Instead of closing needle exchange programs, harm reduction measures should be introduced for drug addicts.","description":"Some say the needle exchange programs are supporting the drug consumers and therefore increase drug rubbish on the streets. Others say these programs are helping the prevention of infectious diseases and treatment of drug addicts, so similar harm reduction programs would be needed in the affected areas.","order":14},{"id":"115","name":"Drug issues 2","question":"Drug prevention at school is primarily the task of the police.","description":"Some say police should be present in the schools in order to tell the youngsters about the harmful consequences of drug consumption. Others say drug prevention is not the police\'s task and professional organizations with a ministerial recommendation should hold lectures about health and addiction.","order":15},{"id":"116","name":"Municipality owned companies","question":"The best owner of the public service companies of Budapest is the city.","description":"Some say the privatization of public utility companies caused great loss for the city and its inhabitants, they should be kept in municipal hands for long term. Others think public authorities are not good managers, private investors can operate these companies more efficiently, the city should only create proper regulation.","order":16},{"id":"117","name":"Electoral system","question":"The municipal election system  for Budapest is broken; it makes it difficult to implement city wide policies.","description":"Unlike the pre-2014 system, voters cannot directly decide on composition of the City Council, since representatives are selected based on votes on the Budapest mayor, district mayors and the compensation list. As there can be five or six-fold differences between the population of districts, voters of smaller districts have a stronger representation than citizens living in big ones.","order":17},{"id":"118","name":"Party district","question":"The introduction of mandatory closing time at midnight for pubs and bars would be the solution to complaints of citizens living in the \\"party district\\".","description":"Those campaigning for closing hours at midnight want to make their neighborhood calmer and more livable. Others say the problem should not be solved through opening hours, as lots of people would lose their jobs, and the party district would be less attractive to tourists.","order":18},{"id":"119","name":"Parking","question":"Public parking administration should not fall within the competence of the districts, instead a unified parking system should be introduced in the capital.","description":"A unified system would bring unified rules, and incomes could be used to implement a city wide transport policy. This measure would however cut the incomes and competencies of the districts and its anti-corruption effect is uncertain.","order":19},{"id":"120","name":"Participatory budget","question":"Participatory budgeting should be introduced in Budapest; citizens shall decide over a part of the city\'s development resources.","description":"In many European cities some percentage of the development resources are allocated based on citizens\' votes. People can evaluate development proposals and vote on the ones to be realized by the city.","order":20},{"id":"121","name":"Olympic sports facilities","question":"The city council should support the construction of sports facilities originally planned for the Olympic Games.","description":"Some say hosting the Olympic Games would be a unique opportunity for Budapest so completing the Kemény Ferenc Development Program should be pursued. Others think that the government is aggressively forcing the investments, however they are not supported by citizens.","order":21},{"id":"122","name":"Bubi (bike-sharing system)","question":"The Bike-Sharing System in Budapest should be maintained and developed.","description":"MOL Bubi is used by less and less people and it has private rivals on the market. Some say the public bike-sharing system hasn\'t fullfilled the expected effects, sot it\'s not worth to maintain it. Others think it should be improved to include better bikes and cover new areas of operation.","order":22},{"id":"123","name":"Subsidies for theaters","question":"In addition to the established theatres subsidized by the city administration, Budapest should also provide financial resources for independent theatres and cultural workshops.","description":"Budapest maintains and supports 11 theaters. Some think the municipality cannot be obliged to finance alternative theaters, others however argue that there should be city funded grants for these.","order":23},{"id":"124","name":"Climate crisis","question":"Budapest should declare a climate emergency and work with the districts to develop a detailed action plan for adaptation to climate change.","description":"More and more cities and countries are declaring climate emergency because of the extreme weather conditions. Some say this is only political uproar without real scientific backing.","order":24},{"id":"125","name":"BKK (public transportation)","question":"The establishment of BKK as a central traffic management organization was a good decision and it should be kept.","description":"Some say that the public transport services improved since the establishment of the BKK (Centre for Budapest Transport). Others say BKK is responsible for the failure of the e-ticket system and the overloading of the drivers, so the dissolution of the organization should be discussed.","order":25},{"id":"126","name":"Public space permit fees","question":"Public space permit fees for the capital\'s public areas should be increased and imposed in a transparent way.","description":"Some would say that the city of Budapest does not really benefit from permitting the private use of public spaces for cultural and sports events, such as the Red Bull Air Race. Furthermore, fees are not calculated in a transparent way. Others believe low fees are a good way to support such programs.","order":26},{"id":"127","name":"Skyscrapers","question":"Budapest does not need skyscrapers.","description":"Many believe that Budapest should preserve its skyline by maintaining the prohibition of skyscrapers, and make no exemptions. Others believe that in certain cases buildings over 90 meters should be permitted.","order":27},{"id":"128","name":"City Hall","question":"The Budapest City Hall building at Deák tér and the huge parking space next to it should become public areas.","description":"Some suggested that the huge parking area of the city hall should be turned into a park, and City Hall Itself could be opened for civil society organizations and community initiatives. Some would argue, there is no real demand for these measures.\\n\\n","order":28},{"id":"129","name":"Pedestrian zones","question":"Green, car-free pedestrian zones should be created both in the city center and in other central areas of Budapest.","description":"Many would love to see huge pedestrian zones in the city center and in central areas of Budapest\'s districts. Others believe that this is not really necessary and neither feasible.\\n\\n","order":29},{"id":"130","name":"Programming of traffic lights","question":"When programming traffic light systems, quick public transport should be the priority.","description":"Many believe that public transport could become more attractive and faster, if the traffic system would adjust green lights to trams (as it happened on tram line 4-6) and busses. Others would argue that such measures would cause even bigger traffic jams.\\n\\n","order":30},{"id":"131","name":"Cruise ships","question":"The air and noise pollution caused by tourist ships on the Danube should be controlled.","description":"Some argue that the pollution caused by tourist ships should be reduced even by limiting the traffic on the Danube. Others say that the development of tourism should not be hindered by the restriction of cruise ships.","order":31},{"id":"132","name":"United appointment and patient management system","question":"A standardized appointment and patient management system should be set up in Budapest in the healthcare sector.","description":"Some say a system like that would be a simple but effective improvement of the accessibility to healthcare. Others say this is not the competency of the city administration and cannot be implemented.","order":32},{"id":"133","name":"Governmental district Buda castle","question":"The transformation of the castle district into a government quarter is a senseless and damaging prestige investment, which must not be supported by the city administration.","description":"Some experts say the castle district is not suitable for the placement of several state institutions, and these investments are incredibly expensive and do not serve the interests of those who live there. Others argue that the castle district is an appropriate place for the ministries, the constructions should be completed.","order":33},{"id":"134","name":"Comprehensible indicator system for measuring quality of life","question":"By the end of the next election cycle, the city administration should design a detailed, comprehensible and accountable indicator system for life satisfaction.","description":"Several cities have indicator system that set target values for livability aspects. If the results of the evaluation do not reach objectives set by the city, necessary measures must be taken.","order":34},{"id":"135","name":"Reduced price for BKK-passes","question":"Budapest should ensure by the end of the next mayor\'s term that the price of an annual public transport ticket does not exceed 100 forint per day.","description":"Some people say that the public transportation fees in Budapest are relatively high. If prices for season tickets would be lower, more citizens would use public transport. Others argue, that it is impossible to reduce the prices for economic reasons.","order":35},{"id":"136","name":"Lobbying","question":"Lobbying should become regulated and more transparent in the city administration.","description":"Investors and entrepreneurs regularly approach decision makers for permits and favourable regulations. A variety of measures can make lobbying more transparent, such as lobby registers or making the mayor’s calendar public.","order":36},{"id":"137","name":"Platform for utilizing vacant properties","question":"The city administration should take steps to rent out vacant properties on the real estate market.","description":"This could be supported by a municipal website, designed to match supply and demand on the housing market. Others say, that this is not the duty of local governments to invest in such IT developments.","order":37},{"id":"138","name":"Free parking for up to 20 minutes","question":"Up to 20 minutes of free parking should be introduced in Budapest.","description":"Many people say, that the payment for short-term parking imposes an unnecessary burden on citizens; therefore it needs to be abolished. Others say, that there is already a lack of parking space in the pay-zones; such a measure would just worsen the situation.","order":38},{"id":"139","name":"Tiborcz-tax","question":"The city administration should impose a special tax on real estate with a value exceeding HUF 500 million.","description":"The supporters of this idea say, that by taxing \'luxurious\' real estate, the City of Budapest could contribute more equitable burden sharing. Others say, that this proposition (named after PM Orbán\'s son-in-law) is nothing more than political campaigning. ","order":39},{"id":"140","name":"Urban Development Council","question":"The government should not exercise control and influence over major construction projects through the Urban Development Council.","description":"Some say, the excessive control exercised by the government on the public investments of Budapest is worrisome, as several members of the government already threaten voters with loss of funding if an opposition mayor will be elected. Others say, the Council is a good platform for the coordination of investments and the cooperation with the government.","order":40}]')},"94d4":function(e,t,i){"use strict";i.r(t);var s=i("2e93"),o=i.n(s);for(var n in s)"default"!==n&&function(e){i.d(t,e,(function(){return s[e]}))}(n);t["default"]=o.a},9507:function(e,t,i){"use strict";var s=function(){var e=this,t=e.$createElement;e._self._c;return e._m(0)},o=[function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("footer",{staticClass:"text-muted mt-4 md-4"},[i("div",{staticClass:"container"},[i("div",{staticClass:"row justify-center"},[i("div",{staticClass:"col-md-3"}),i("div",{staticClass:"col-md-6 text-center"},[i("a",{attrs:{href:"http://kmonitor.hu",title:"K-monitor",id:"footer-kmonitor-logo"}},[i("img",{attrs:{src:"https://voksmonitor.azureedge.net/hu/2018-es-orszaggyulesi-valasztas/statics/pictures/kmonitor.png",alt:"K-Monitor"}})]),i("br"),i("br"),i("a",{attrs:{href:"http://kohovolit.eu",title:"KohoVolit.eu",id:"footer-kohovolit-logo"}},[i("img",{attrs:{src:"https://volebnikalkulacka.cz/image/logo.png",alt:"logo kohovolit.eu"}})]),i("br"),i("p",{staticClass:"lead black"},[e._v("Választási kalkulátorok a "),i("a",{attrs:{href:"http://kohovolit.eu"}},[e._v("KohoVolit.eu")]),e._v("-tól. 2006 óta.")]),i("hr"),i("p",{staticClass:"black"},[e._v("Creative Commons BY-SA 4.0 | "),i("a",{attrs:{href:"http://kohovolit.eu",id:"footer-kohovolit-licence"}},[e._v("KohoVolit.eu")]),e._v(" & "),i("a",{attrs:{href:"http://kmonitor.hu"}},[e._v("K-Monitor")]),e._v(" 2019")])])])])])}];i.d(t,"a",(function(){return s})),i.d(t,"b",(function(){return o}))},a90a:function(e,t,i){},ad21:function(e,t,i){"use strict";i.r(t);var s=i("e504"),o=i.n(s);for(var n in s)"default"!==n&&function(e){i.d(t,e,(function(){return s[e]}))}(n);t["default"]=o.a},c275:function(e,t,i){"use strict";var s=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("nav",{staticClass:"navbar navbar-expand-lg navbar-dark bg-primary"},[i("a",{staticClass:"navbar-brand",attrs:{href:"/"}},[e._v(e._s(e.$t("header_name")))])])},o=[];i.d(t,"a",(function(){return s})),i.d(t,"b",(function(){return o}))},c985:function(e,t,i){"use strict";var s=i("a90a"),o=i.n(s);o.a},e504:function(e,t){},fd2d:function(e,t,i){"use strict";i.r(t);var s=i("9507"),o=i("94d4");for(var n in o)"default"!==n&&function(e){i.d(t,e,(function(){return o[e]}))}(n);var a=i("2877"),r=Object(a["a"])(o["default"],s["a"],s["b"],!1,null,null,null);t["default"]=r.exports}}]);
//# sourceMappingURL=chunk-f191a546.e0f0cab3.js.map