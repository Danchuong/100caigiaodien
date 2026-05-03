# Kevin Basset — Refero Style

- Refero URL: https://styles.refero.design/style/e3f59efd-a254-43f1-9dac-36a35a4b290c
- Site URL: https://kevin.tw
- ID: e3f59efd-a254-43f1-9dac-36a35a4b290c
- Theme: light
- Industry: other
- Created: 2026-04-30T02:08:15.063Z
- Ranks: newest: 436, popular: 1031, trending: 965

> ink-scribbled notebook paper

## Description

The Kevin Basset site adopts a 'notebook scribble' aesthetic, reminiscent of a student's hand-drawn notes on lined paper. The design is characterized by its light, monochrome palette, with all elements rendered as if sketched in black ink. Interactive elements, such as links, appear as light gray boxes, maintaining the paper-like texture. Handwriting-style typography reinforces this informal, personal, and childlike visual identity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. |
| Paper White | #ffffff | neutral | Light neutral action fill for buttons on dark surfaces. |
| Pencil Sketch | #ececec | neutral | Hover state for interactive links, subtle background fill for selected/active elements – evokes the lighter tone of pencil shading on paper |
| Notebook Line Teal | #1d97b8 | accent | Decorative notebook lines – a subtle accent that defines the page's core structure (derived from linear-gradient) |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| system | Avenir Next, sans-serif (for similar humanist sans-serif feel and good rendering) | 400, 600, 700 | 16px, 20px, 50px | 1.20 | All text elements, including headings, body, and interactive links. The humanist sans-serif with varying letter spacing contributes to the bespoke, slightly informal 'hand-drawn' feel of the site. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 16 | 1.2 | 0.32 |
| subheading | 20 | 1.2 | 1 |
| display | 50 | 1.2 | 3.15 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "0px"
  },
  "elementGap": "20px",
  "sectionGap": "25px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Sketched Link Button (Default/Inactive)

**Role:** Primary interactive element for all links on the site.

A rectangular button-like element with a Paper White background, an Ink Black hand-drawn border, and Ink Black text. The corners are sharp, reinforcing the 'cut paper' aesthetic. The drawing effect is applied through illustrations.

### Sketched Link Button (Hover)

**Role:** Visual feedback for interactive links.

Similar to the default link button but with a Pencil Sketch background. The Ink Black border and text remain consistent, providing a subtle visual cue without departing from the monochrome scheme.

## Do's

- Use Ink Black (#000000) for all text, borders, and hand-drawn visual elements.
- Set the primary page background to Paper White (#ffffff) to simulate notebook paper.
- Apply Pencil Sketch (#ececec) as the background color for interactive elements on hover.
- Maintain the system sans-serif font across all text, emphasizing a hand-drawn yet legible feel.
- Ensure all interactive links have a visible Ink Black border and Paper White background by default.
- Integrate Notebook Line Teal (#1d97b8) only as decorative ruled lines, not for primary UI elements.

## Don'ts

- Avoid using any saturated colors for functional UI elements; the palette is strictly monochrome with a single subtle accent.
- Do not introduce rounded corners; elements should maintain sharp, cut-paper edges.
- Refrain from using shadows or gradients on interactive elements, as this would break the flat, hand-drawn aesthetic.
- Do not use multiple font families; stick to the single system font to maintain typographic consistency.
- Avoid typical button styling like strong background fills or complex hover animations that would distract from the sketched feel.
- Do not vary line heights from the specified 1.2 across different type sizes.

## Layout

The page uses a centered, max-width contained layout, though no specific max-width is provided, suggesting adaptability. The hero section features a prominent centered headline/name with a hand-drawn avatar. Content is primarily a vertical stack of uniform 'sketched link buttons,' each occupying its own horizontal band. There are no complex grid layouts or alternating section patterns; the rhythm is consistent and linear, like a list on a piece of paper.

## Imagery

The site predominantly uses hand-drawn, black-ink illustrations and icons that mimic a quirky, child-like scribble aesthetic. There are no photographs or complex graphics. Visuals are contained and appear outlined, often with a slight wobble to convey an imperfect, unpolished feel. They serve both decorative and explanatory roles, like the robot graphic or the avatar sketch. Imagery density is moderate, with illustrations breaking up text blocks and adding character.

## Similar Brands

| Business | Why |
| --- | --- |
| Paper.js (website) | Exploits a 'paper' aesthetic with hand-drawn lines complementing technical content. |
| Neat.css | Emphasizes a 'hand-drawn' UI with deliberate imperfections and sketch-like lines. |
| Rough.js library | Generates graphics that look hand-drawn with a sketch effect. |
| Hand-drawn.io | A portfolio site using a deliberately informal, sketched visual style. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference: text: #000000, background: #ffffff, border: #000000, accent: #1d97b8, primary action: no distinct CTA color

Example Component Prompts:
Create a standard link button: Paper White background, Ink Black border, Ink Black text. Text size 16px, weight 400, letter-spacing 0.32px.
Create a heading: Ink Black text, size 50px, weight 700, letter-spacing 3.15px, line-height 1.2.
Create an icon next to text: Ink Black icon, 10px right margin from text, text size 16px, weight 400, letter-spacing 0.32px, Ink Black.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514878652-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777514878652-thumb.jpg |
