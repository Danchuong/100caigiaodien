# GUSTAVO Faria © — Refero Style

- Refero URL: https://styles.refero.design/style/cd3546fc-b6d0-4ec9-8624-580549af347d
- Site URL: https://gustavo.work
- ID: cd3546fc-b6d0-4ec9-8624-580549af347d
- Theme: light
- Industry: design
- Created: 2026-04-30T03:08:02.415Z
- Ranks: newest: 222, popular: 1217, trending: 1209

> Minimalist gallery wall

## Description

Gustavo Faria's portfolio website presents an austere, high-contrast, text-dominant canvas. Information is structured rigidly with subtle typographic variations to create hierarchy rather than color or extensive spacing. The design emphasizes content clarity and directness through a near-monochromatic palette and a compact layout, punctuated by a single, striking personal image that challenges the otherwise stark presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces |
| Ink Black | #000000 | neutral | Primary text, prominent headings |
| Graphite | #282828 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Pale Ash | #dcdcdc | neutral | Muted secondary text, subtle dividers, inactive states |
| Blush Tone | #efc4b2 | accent | Background for personal imagery |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| custom_21879 |  | 400, 700 | 12px, 142px | 0.81, 1.00, 1.17, 1.67 | Primary headings and interactive links. The tight letter spacing for large text creates a condensed, impactful visual. |
| custom_49610 |  | 400 | 125px | 1.02 | Large display headings, specifically for the year range. Its imposing size commands attention in an otherwise subdued layout. |
| -apple-system | system-ui | 400 | 16px | 1.00 | All body text and descriptive information, providing clarity and system-level familiarity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.17 | -0.047 |
| body | 16 | 1 |  |
| heading | 125 | 1.02 |  |
| display | 142 | 0.81 | -0.047 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "0px"
  },
  "elementGap": "1px",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Work Entry Link

**Role:** Interactive list item

Text link using custom_21879, weight 400 for primary text and Pale Ash for secondary descriptor. Underlined with graphite on hover (or current selected item). No padding, using negative letter-spacing for visual density.

### Navigation Link

**Role:** Top-level navigation

Simple text link in Ink Black, using custom_21879 at 12px, weight 400, with tight letter-spacing. Minimal padding around text.

### Year Range Display

**Role:** Large decorative heading

Large text element using custom_49610, 125px for individual years and custom_21879, 142px for the dash, both in Ink Black, normal letter spacing. Forms a prominent visual anchor on the page.

## Do's

- Prioritize text as the primary vehicle for information and hierarchy, using color only for stark contrast or subtle guidance.
- Maintain a monochromatic palette with Canvas White backgrounds, Ink Black for primary text, and Graphite or Pale Ash for secondary details.
- Use custom_21879 (or suitable substitute) for all interactive text and primary headings, embracing its tight letter-spacing for visual impact.
- Apply 0px border-radius to all elements to reinforce a sharp, unyielding aesthetic.
- Ensure horizontal lines or borders are 1px thick and use Pale Ash for subtle visual separation between list items or sections.
- Keep spacing between elements minimal, often 1px, to create a compact and dense information display.

## Don'ts

- Avoid colorful or decorative elements outside of explicit imagery; the interface should remain stark and functional.
- Do not introduce soft shadows or gradients, as the system relies on flat surfaces and hard edges.
- Do not use multiple font families for body text or navigation; stick to the defined typographic system.
- Refrain from generous padding or excessive white space between repeating elements to maintain the compact presentation.
- Do not use bold weights indiscriminately; reserve weight 700 for specific high-emphasis elements identified in `custom_21879` roles.

## Layout

The page adheres to a predominantly full-bleed model, with a centered content block for the bio and navigation. The hero section features a large, horizontally dominant year range (2019-2025) at the top right, contrasting with the bio on the left. Content is primarily organized into two main columns: a left column for bio text (and a personal image) and a right column for the 'Work Selection' list. The work list items are presented in a compact, vertically stacked format, separated by 1px Pale Ash lines. There is no explicit max-width constraint; content adapts to the viewport. A sticky top navigation containing 'Gustavo Faria', 'Info', and 'Instagram' seems present.

## Imagery

The site primarily uses idiosyncratic, distorted photography of faces, specifically a self-portrait, contained within irregular, organic cutouts. These images are not product showcases but serve as a strong personal brand statement, directly contrasting the minimalist UI. They operate decoratively and as a focal point, occupying a significant visual area and bringing an element of surrealism to the otherwise structured page. Icons are absent, and UI elements are purely textual or geometric.

## Similar Brands

| Business | Why |
| --- | --- |
| Rik Lomas | Monochromatic palette, text-heavy layout, and distinct visual identity through unique imagery. |
| Julien Van Havere | Stark white background, strong typographic hierarchy, and minimalist content presentation with bold graphic elements. |
| Studio Fnt | Emphasis on black and white, unconventional use of typography, and a strong, almost brutalist approach to visual design. |
| Active Theory | High-contrast, text-forward design with sparse but impactful visual interruptions, often with a surreal or artistic bent. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #282828
accent: #efc4b2
primary action: no distinct CTA color

Example Component Prompts:
1. Create a top navigation bar: Canvas White background. 'Gustavo Faria', 'Info', 'Instagram' as text links using custom_21879, weight 400, 12px, Ink Black. Minimal 4px padding between items.
2. Design a work list item: 'Consul' as main text using custom_21879, weight 400, Ink Black, 12px. Secondary text 'Visual Identity, Motion Design' uses -apple-system, 16px, Pale Ash. Separated by a 1px Pale Ash border bottom.
3. Create the large year heading '2025': Use custom_49610, 125px, weight 400, Ink Black, normal letter-spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518467404-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518467404-thumb.jpg |
