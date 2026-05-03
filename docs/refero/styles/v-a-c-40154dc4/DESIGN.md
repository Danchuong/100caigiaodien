# V–A–C — Refero Style

- Refero URL: https://styles.refero.design/style/40154dc4-e681-4df9-be01-a6681d5887a6
- Site URL: https://v-a-c.org/en
- ID: 40154dc4-e681-4df9-be01-a6681d5887a6
- Theme: light
- Industry: media
- Created: 2026-04-30T02:55:18.017Z
- Ranks: newest: 268, popular: 1261, trending: 1282

> Architectural grid on white

## Description

V–A–C embraces a highly structured, almost architectural aesthetic, presenting content within a minimalist, monochrome grid. Information is delivered with an academic rigor: thin lines, expansive white space, and stark black typography create a sense of directness without embellishment. The design prioritizes visual organization and content discovery through a precise, fixed-width layout and sparse use of interactive elements, giving the impression of an expertly curated digital catalog.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, ghost button text (dark theme) |
| Ink Black | #000000 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Accent Gray | #999999 | neutral | Decorative strokes, subtle secondary graphical elements |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Diagramatika Text | IBM Plex Sans | 400 | 16px, 20px | 1.00, 1.10, 1.15 | Body copy, link text, card subtitles, input text — conveys clear information without demanding attention. |
| Diagramatika Display | IBM Plex Sans | 400 | 24px, 34px, 35px | 0.88, 0.90, 1.15 | Headlines, section titles, card titles — large and impactful, yet light in weight, establishing hierarchy subtly. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 16 | 1.15 |  |
| body | 20 | 1.1 |  |
| subheading | 24 | 1.15 |  |
| heading | 34 | 0.9 |  |

## Spacing & Shape

```json
{
  "radius": {
    "all": "0px"
  },
  "elementGap": "5px",
  "sectionGap": "150px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Text Button (Dark Text)

**Role:** Primary interactions and navigation links

Transparent background with Ink Black text. No padding, border, or radius. Text uses Diagramatika Text or Display, weight 400. Example: 'Search' or 'Load more'.

### Ghost Text Button (Light Text)

**Role:** Interactive elements on dark sections, such as language toggles

Transparent background with Canvas White text. No padding, border, or radius. Text uses Diagramatika Text, weight 400. Example: 'ru' / 'en'.

### Minimal Card

**Role:** Displaying informational blocks like event listings

Transparent background with no border-radius or box-shadow. Content is tightly aligned, often directly on the canvas. Padding is 0px. Top padding can vary (258px, 271px, 274px, 275px) depending on image height. Example: Event listings like 'Alexandra Sukhareva. Beginnings'.

### Line Input

**Role:** Form inputs for search or data entry

Transparent background with Ink Black text and a 1px Ink Black underline. Left padding is 2px. No border radius. Text uses Diagramatika Text, weight 400.

## Do's

- Use 'Ink Black' (#000000) for all text color, borders, and interactive elements where contrast is paramount.
- Maintain a strict '0px' border-radius for all interactive and display elements, adhering to the sharp, angular aesthetic.
- Employ 'Diagramatika Text' (400) for all body copy and most UI labels, prioritizing clarity over decoration.
- Employ 'Diagramatika Display' (400) for headlines and major navigational elements, with sizes 24px, 34px, or 35px.
- Ensure ample whitespace between sections using '150px' vertical spacing (`sectionGap`).
- Design all interactive elements, such as buttons and links, as transparent backgrounds with only text and a border where necessary.
- Utilize 'Accent Gray' (#999999) sparingly for subtle decorative strokes, not for primary UI elements.

## Don'ts

- Avoid using any colors other than Canvas White, Ink Black, and Accent Gray for primary UI elements and text.
- Do not introduce any border-radius greater than '0px' on any component or surface.
- Never apply box-shadows or elevation effects; the design system relies on flat surfaces and lines.
- Do not introduce any explicit background colors for cards; they should appear as content directly on the canvas.
- Avoid decorative imagery that breaks the monochrome, grid-based aesthetic, unless it is content within a card.
- Do not use letter-spacing adjustments; all typography should maintain 'normal' letter-spacing.
- Refrain from using any gradient fills; surfaces should be solid colors.

## Layout

The page operates on a full-bleed model horizontally, with content contained within a flexible-width, vertically oriented grid. The hero section often features a clean line and heading (like 'GES-2', 'V', 'A', 'C') at the top, acting as a navigational anchor. Section rhythm is dictated by a consistent '150px' vertical gap between content blocks. Content is arranged primarily in a two-column grid where text and imagery flow in a linear, timeline-like sequence down the page without alternating patterns. Navigation is minimal, consisting of text links in the header and alongside sections, with a fixed position vertical navigation bar with rotated text. The design is compact in its element spacing but generous in its section spacing.

## Imagery

Imagery largely consists of contained, unedited photographs and occasionally product/installation shots, serving as direct content rather than decorative elements. They are displayed within minimalist card containers without rounded corners or shadows, sitting directly on the white canvas. The treatment is raw, with no specific color filters beyond the original photo's intent. Icons (like the arrow for events) are minimal, outlined, and monochromatic, using 'Ink Black' (#000000). Imagery functions as explanatory content or event showcases, allowing the text to provide context.

## Similar Brands

| Business | Why |
| --- | --- |
| The Tate Modern | Similar white-space-heavy, precise typographic approach for an institutional feel. |
| MoMA Design Store | Employs a stark, grid-based layout with minimal color, focusing on content and product arrangement. |
| Studio—JQ | Many portfolio sites use a similar monochrome, high-contrast, no-radius aesthetic with strong typography. |
| Bauhaus Archive | Historical design influences that prioritize function, clean lines, and a minimalist color palette, similar to the V–A–C approach. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #000000 (primary visual accent)
primary action: no distinct CTA color

Example Component Prompts:
Create a header link: Using Diagramatika Text 400 at 16px, color #000000, no background.
Create an event card title: 'The Oldest Person in the World.' using Diagramatika Display 400 at 34px, color #000000.
Create a search input: Transparent background input with a 1px #000000 bottom border, 2px padding-left, using Diagramatika Text 400 at 16px, color #000000.
Create a navigation marker: Vertical text 'Architecture' using Diagramatika Text 400 at 16px, color #000000, rotated -90deg.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517693895-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517693895-thumb.jpg |
