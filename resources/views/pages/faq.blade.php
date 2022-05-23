@extends('layouts.app')
@section('content')

    <div class="uk-section section-sub-nav uk-padding-remove">
        <div class="uk-container">
            <div uk-grid>
                <div class="uk-width-2-3@m">
                    <ul class="uk-breadcrumb uk-visible@m">
                        <li><a href="/">Home</a></li>
                        <li><span href="#">Frequently Asked Questions</span></li>
                    </ul>
                </div>
                <div class="uk-width-1-3@m">
                    <div class="uk-margin">
                        <form class="uk-search uk-search-default">
                            <a href="#" class="uk-search-icon-flip" uk-search-icon></a>
                            <input id="autocomplete" class="uk-search-input" type="search" autocomplete="off" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="border-top"></div>
        </div>
    </div>

    <div class="uk-section uk-section-small uk-padding-remove-bottom section-content">
        <div class="uk-container">
            <div class="uk-grid-medium" uk-grid>
                <div class="uk-width-3-4@m">
                    <h3 font style="color: #7835a8; font-weight:bold;" >PSYCHOLOGICAL EVALUATION AND FAQS</h3>
                    <p class="uk-text-lead uk-margin-large-bottom">Here are answers to most common questions. Can't find an answer? Call us!</p>
                    <ul class="list-faq" uk-accordion="multiple: true">
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">What Does an Educational Psychology Assessment Cover?</h3>
                            <div class="uk-accordion-content">
                                <p>A standard Educational Psychology Assessment usually involves a series of different activities to help identify a child’s or young person’s specific
                                    learning style, strengths, and areas of need. The educational psychologist will usually assess the child/young person using a combination of interview
                                    and standardized assessment tools. Findings from the assessment help to generate suitable recommendations for teachers, parents, and other professionals
                                    that are used to meet the needs of the individual. All findings are summarized in a report as well as the recommendations.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">How Long Will the Assessment Take?</h3>
                            <div class="uk-accordion-content">
                                <p>The assessment usually takes approximately 3 – 3.5hours of testing inclusive of short breaks. The assessment will include a battery of widely used standardised
                                    instruments. The time a child/young person takes to complete the assessment varies according to a multitude of factors such as attention ability, motivation, anxiety etc.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">How Long Do I Have to Wait for The Report?</h3>
                            <div class="uk-accordion-content">
                                <p>A full comprehensive report is provided within 4 – 6 weeks of the assessment date, but this will be confirmed to you. This also entails a feedback session on the report
                                    done with the parents and in some cases the child/young person, where appropriate within this period.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">What Assessment Tools Are Used?</h3>
                            <div class="uk-accordion-content">
                                <p>The main assessment tools used to measure general cognitive abilities is the Wechsler Intelligence Scale, Fifth Edition (WISC-V). The WISC-V provides information about a child’s/young
                                    person’s general intellectual ability (or general IQ) and five cognitive domains that impact performance as well as specific areas of intellectual strengths and needs. It is
                                    the particular areas of strengths and needs (the learning profile) that reveals the most helpful information as opposed to just getting a general IQ score. <br/>
                                    Alongside measures of cognitive ability, the assessment also includes measures of academic achievement and any other specific tests that might be necessary (e.g., standardised
                                    measures of attention, phonological processing, visual motor integration, memory etc). The decision of what tests to use will be based on the difficulties identified by all informants
                                    and by observations during testing. Understanding of language, reading and writing levels, and comprehension of language are also examined.
                                </p>
                                <p><b>Note: </b>Interpretation of results will not be made based solely on the variations (also known as “scatter”) among the test scores. The test results are integrated with all the other relevant
                                    information into a comprehensive report with specific recommendations for the school, family, and any other relevant professionals or bodies involved.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">What Other Assessments might one do?</h3>
                            <div class="uk-accordion-content">
                                <p>Following an assessment, other assessments may be recommended to examine possible concerns. These assessments may include:
                                    <ol>Autism Spectrum Disorder Assessment</ol>
                                    <ol>Attention Deficit/Hyperactivity Disorder (ADHD) assessment</ol>
                                    <ol>Occupational Therapy assessment</ol>
                                    <ol>Speech and Language assessment</ol>
                                    <ol>Audiologist</ol>
                                    <ol>Ophthalmologist</ol>
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">What Is an Advice?</h3>
                            <div class="uk-accordion-content">
                                <p>An advice is guidance or recommendations offered with regard to prudent future action.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">Can you assess children and adults?</h3>
                            <div class="uk-accordion-content">
                                <p>Yes. We provide assessments to children/young adults in school as well as adults in the workplace or higher education.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">How Much Does an Assessment Cost?</h3>
                            <div class="uk-accordion-content">
                                <p>Costs vary depending on the nature of the assessment required. Full costs will be confirmed prior to any work being undertaken.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">Is the Assessment Confidential?</h3>
                            <div class="uk-accordion-content">
                                <p>Yes. Parental consent is required for the assessment in the case of a child. In the case of adults, consent to being assessed and to release the report to the employer/college is required from the adult.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="uk-accordion-title uk-margin-remove">Do You Provide Assessments for Private Individuals?</h3>
                            <div class="uk-accordion-content">
                                <p>Yes, we provide assessments on behalf of individuals as well as on behalf of schools, colleges, local authorities, or companies.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

@endsection
