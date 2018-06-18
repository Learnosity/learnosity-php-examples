/*global LearnosityAmd*/
LearnosityAmd.define(['underscore-v1.5.2'], function (_) {
    'use strict';

    function CustomShorttextScorer(question, response) {
        this.question = question;
        this.response = response;
        this.validResponse = question.valid_response || {};
    }

    _.extend(CustomShorttextScorer.prototype, {
        isValid: function () {
            return this.response === this.validResponse;
        },

        score: function () {
            return this.isValid() ? this.maxScore() : 0;
        },

        maxScore: function () {
            return this.validResponse.score || 1;
        },

        canValidateResponse: function () {
            return !!this.question.valid_response;
        }
    });

    return {
        Scorer:   CustomShorttextScorer
    };
});
