# ID—C — Refero Style

- Refero URL: https://styles.refero.design/style/03a78f26-ebd4-4d09-9012-7c69d327df9a
- Site URL: https://id-c.se
- ID: 03a78f26-ebd4-4d09-9012-7c69d327df9a
- Theme: light
- Industry: design
- Created: 2026-04-30T01:41:13.475Z
- Ranks: newest: 545, popular: 262, trending: 162

> Architectural Blueprint Precision

## Description

ID-C employs an architectural blueprint aesthetic, utilizing a monochromatic palette defined by stark black and white with a spectrum of grays. Typography is precise and understated, favoring a custom sans-serif with subtle letter-spacing for headlines to convey authority through restraint. The layout emphasizes clean lines, ample negative space, and modular content blocks, creating a sense of order and sophisticated simplicity. Interaction is indicated through subtle border changes rather than bold color shifts.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Primary background for all page content and navigation areas |
| Ink Black | #000000 | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Dividing Ash | #ededed | neutral | Subtle border colors, particularly for horizontal dividers and section separations |
| Muted Stone | #adadad | neutral | Secondary text, muted links, and less prominent borders. Provides visual relief from Ink Black |
| Caption Gray | #767676 | neutral | Descriptive body text, badge text, and hairline borders for less prominent components |
| Red Dot Accent | #ee3026 | accent | Supporting palette color for small decorative accents when the core palette needs contrast. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| universnextpro | Helvetica Neue, Arial | 200, 400 | 12px, 17px, 24px, 44px, 60px | 1.00, 1.07, 1.17, 1.33, 1.45, 1.65 | The primary typeface for all text. Its range of light weights and precise letter-spacing supports the minimalist and refined aesthetic. Weight 200 is used for large, impactful headlines, offering a sense of quiet authority, while weight 400 is ideal for body text and navigation, maintaining clarity without imposing visual weight. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.65 | -0.12 |
| body-sm | 17 | 1.45 | -0.54 |
| body | 24 | 1.33 | -0.96 |
| heading | 44 | 1.17 | -2.02 |
| display | 60 | 1.07 | -3.3 |

## Spacing & Shape

```json
{
  "radius": {
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "200px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Navigation Link

**Role:** Primary navigation items.

Text uses universnextpro weight 400, size 17px, Ink Black. Hover and active states are visually indicated by a hairline Ink Black border-bottom appearing below the text.

### Work Entry Card

**Role:** Displays individual work portfolio pieces with associated metadata.

Invisible background (rgba(0, 0, 0, 0)), 8px border-radius applied to containing element. Image area has a 1px solid Ink Black border. Padding is implicitly handled by grid gaps. Text uses universnextpro with Caption Gray for descriptive text and Ink Black for titles.

### Badge Information Tag

**Role:** Categorizes and describes work entries.

Invisible background (rgba(0, 0, 0, 0)), text color is Caption Gray (#767676) at 12px universnextpro. No explicit padding or border on the badge itself.

### Ghost Border Button

**Role:** Secondary action or 'View All' links.

Text is Ink Black or Muted Stone, universnextpro. Interactive. The primary visual cue for interaction is a 1px Ink Black border appearing on hover or focus.

## Do's

- Prioritize Ink Black (#000000) for all primary text, headings, and significant borders to maintain high contrast and visual weight.
- Use Canvas White (#ffffff) as the overarching background for all primary surfaces to enforce a clean, spacious aesthetic.
- Employ universnextpro with specific, subtle letter-spacing values to control visual density, especially for headings at larger sizes.
- Define interactive states primarily through border changes, using Ink Black (#000000) for active borders and Muted Stone (#adadad) for subtle hints.
- Apply 8px border-radius to all structural elements like cards and image containers for a consistent, soft edge.
- Utilize Dividing Ash (#ededed) for hairline borders that provide visual separation without adding significant weight.
- Maintain a comfortable density with an element gap of 16px and allow for larger section gaps of 200px to emphasize spaciousness.

## Don'ts

- Avoid using highly saturated colors for functional UI elements; reserve high chroma for designated decorative accents like the Red Dot accent.
- Do not introduce strong drop shadows or complex gradients; the system relies on flat surfaces and clean lines.
- Do not deviate from the universnextpro font family or its specified weights and letter-spacing values.
- Avoid dense, information-packed sections without sufficient white space; prioritize spaciousness and clarity.
- Do not use ad-hoc spacing values; adhere to the 8px base unit with defined gaps (16px elementGap, 200px sectionGap).
- Do not use different radius values for cards and buttons; ensure all rounded elements use 8px.
- Do not use #0000ee (browser default link blue); all links should conform to Ink Black or Muted Stone.

## Layout

The page maintains a centered, fluid-width model that appears to breath within implied vertical constraints, though no explicit max-width is globally enforced, content sections are contained. The hero section features a prominent, centered headline with supporting text positioned below. A consistent rhythm is established by alternating blocks of content, often with a large vertical gap (200px) acting as a strong section divider. Content is frequently arranged in a grid-like fashion, showcasing work in 3-column card layouts. Navigation is a simple, fixed top bar, often with subtle border changes on hover.

## Imagery

The site uses a mix of tightly cropped product photography and illustrative product renders, usually against stark white or light gray backgrounds. Images are contained within rectangular frames, often with a 1px black border, and do not overlap. There's a notable absence of lifestyle photography or complex scenic visuals. Icons appear minimal, primarily outlined or filled in monochromatic tones matching the text, serving a functional rather than decorative role.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Similar high-contrast monochrome aesthetic with precise typography and grid-based content layouts. |
| Chermayeff & Geismar & Haviv | Employs a stark, minimalist visual style with a strong emphasis on typographic hierarchy and clean lines in their case studies. |
| Pentagram | Showcases work through structured, often grid-based layouts and a focus on clean typography over heavy visual effects. |
| Manual (design studio) | Shares a preference for largely monochromatic palettes, ample negative space, and disciplined typography to highlight content. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: #ee3026
primary action: no distinct CTA color

Example Component Prompts:
1. Create a navigational link: 'Work' with universnextpro weight 400, size 17px, Ink Black text. It should show a 1px solid Ink Black border-bottom on hover.
2. Create a portfolio item card: An image placeholder with a 1px Ink Black border, housed in an element with 8px radius. Below the image, include 'Nike x Hyperice' as a title using Ink Black text, universnextpro, and 'Brand identity, Packaging' as a badge using Caption Gray text, universnextpro size 12px, both aligned left.
3. Create a 'View all' link: Text 'View all' using Muted Stone (#adadad), universnextpro. The link should have a 1px Ink Black border appearing on hover, and use 16px padding on the left and right.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513256814-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513256814-thumb.jpg |
