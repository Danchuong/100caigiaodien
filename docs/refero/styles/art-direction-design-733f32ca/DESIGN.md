# Art Direction/Design — Refero Style

- Refero URL: https://styles.refero.design/style/733f32ca-efc3-40fb-bc58-327bd2b45828
- Site URL: https://www.lundqvistdallyn.studio
- ID: 733f32ca-efc3-40fb-bc58-327bd2b45828
- Theme: light
- Industry: design
- Created: 2026-04-30T03:44:27.565Z
- Ranks: newest: 80, popular: 549, trending: 347

> High-contrast monochrome blueprint

## Description

Lundqvist & Dallyn presents as a disciplined, high-contrast monochrome canvas, where bold typography and intentional negative space command attention. Visual information is presented with stark clarity, often reversing between black text on white and white text on black. The system uses a single, vibrant teal accent color sparingly, injecting a precise jolt of energy into an otherwise composed and minimal aesthetic. Imagery is integrated as bold, contained blocks, maintaining the overall sense of deliberate, high-impact design.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page and section backgrounds, primary surface for content |
| Ink Black | #1d1d1d | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Accent Teal | #75fbee | accent | Teal wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Favorit | Arial | 400 | 21px, 51px, 60px | 1.10, 1.20 | Headlines, section titles, prominent display text — its wider tracking (-0.035em) gives it a composed, editorial feel. |
| AkkuratMonoLLWeb | Menlo | 400 | 11px, 18px | 1.00, 1.70 | Navigation links, body text, meta information, and functional UI elements — the monospaced, slightly wider tracking (0.1em) provides a technical, precise voice. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1 | 1.1 |
| body | 18 | 1.7 | 1.8 |
| subheading | 21 | 1.1 | -0.735 |
| heading | 51 | 1.2 | -1.785 |
| display | 60 | 1.2 | -2.1 |

## Spacing & Shape

```json
{
  "radius": {},
  "elementGap": "10px",
  "sectionGap": "113px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Primary Navigation Link

**Role:** Top-level navigation items

Text in AkkuratMonoLLWeb, weight 400, 11px, line-height 1.00, letter-spacing 0.1em, Ink Black (#1d1d1d). Receives a 10px padding-bottom on hover, and an Ink Black (#1d1d1d) border-bottom.

### Hero Headline

**Role:** Main page headline

Favorit, weight 400, 60px, line-height 1.20, letter-spacing -0.035em, Ink Black (#1d1d1d). Presented with generous vertical spacing (marginTop 75px).

### Content Grid Item

**Role:** Individual elements within a layout grid for work examples or features

Each item uses an image or graphic as its main visual. Headings within are Favorit, weight 400, 21px, line-height 1.10, letter-spacing -0.035em, Ink Black (#1d1d1d). Subtext in AkkuratMonoLLWeb, weight 400, 18px, line-height 1.70, letter-spacing 0.1em, Ink Black (#1d1d1d).

### Footer Canvas

**Role:** Page footer background

Background color of Accent Teal (#75fbee), with Ink Black (#1d1d1d) text.

## Do's

- Use Canvas White (#ffffff) as the dominant background color for all main content areas.
- Employ Ink Black (#1d1d1d) exclusively for primary text, headings, and interactive element borders.
- Apply AkkuratMonoLLWeb for all functional text, navigation, and small information at 11px or 18px, with 0.1em letter-spacing.
- Reserve Favorit for headlines and prominent textual statements, at sizes 21px, 51px, or 60px, with -0.035em letter-spacing.
- Introduce Accent Teal (#75fbee) only as a background color for distinct content blocks, like the footer or specific highlighted sections.
- Maintain generous negative space, with a section gap of 113px between major content blocks.
- Utilize a compact element gap of 10px, especially for horizontal spacing within navigation or grouped links.

## Don'ts

- Do not use Accent Teal (#75fbee) for text or borders; it is strictly a background color.
- Avoid using any other colors beyond Canvas White, Ink Black, and Accent Teal.
- Do not vary the letter-spacing of Favorit or AkkuratMonoLLWeb from their specified values.
- Do not add shadows or heavy borders to elements; surfaces are largely flat.
- Avoid mixing text styles; Favorit is for display, AkkuratMonoLLWeb for everything else.
- Do not use subtle gradients or overlays; maintain a stark, high-contrast aesthetic.
- Do not introduce rounded corners; elements should adhere to sharp, precise edges.

## Layout

The page adheres to a full-bleed structure without a fixed max-width, allowing content to stretch across the viewport, then often containing inner elements. The hero features a centered headline over a background that alternates between Canvas White and Ink Black. Sections maintain a consistent vertical rhythm with a 113px section gap. Content is arranged in alternating structures, including text-left/image-right and centered stacks for large headlines. There's an implicit grid for case studies or portfolio pieces, where visuals are presented as large, distinct blocks. The layout is spacious yet compact in information flow, guiding the eye through deliberate, large-scale compositions. Navigation is a minimal top-bar, fixed to the top right corner, while the brand logo 'L&D' is top-left.

## Imagery

Imagery primarily consists of contained, high-impact product photography or abstract graphics, often presented as large, full-width blocks within the layout. The treatment leans towards stark presentation with minimal context, emphasizing the object or subject itself. Icons are minimal, monochromatic, and typically outlined (#1d1d1d on #ffffff). The density is high-impact visual, where imagery takes up significant screen real estate, acting as both decorative atmosphere and content showcase, with a text-light approach.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Monochrome base palette with precise accent colors and strong, hierarchical typography. |
| Linear | High-contrast UI, emphasis on clean typography and functional, restrained use of color. |
| AIGA Design Archives | Editorial feel, strong focus on stark typography, and a deliberate use of negative space. |
| Hey.com | Clear, direct visual language with high contrast and minimal adornment, letting content lead. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1d1d1d
background: #ffffff
border: #1d1d1d
accent: #75fbee
primary action: no distinct CTA color

Example Component Prompts:
Create a navigation bar: background #ffffff. "L&D" logo (imagine an SVG icon in Ink Black #1d1d1d). Links are AkkuratMonoLLWeb weight 400, 11px, Ink Black (#1d1d1d), letter-spacing 0.1em, with 10px left/right padding and 5px bottom padding on active state, all elements separated by 10px. The words are 'Work', 'About', 'Index', 'Shop', 'Contact'.
Create a hero section with two columns: left column is empty. Right column features a headline "We create elegant and engaging designs for both online and offline" in Favorit weight 400, 60px, line-height 1.20, letter-spacing -0.035em, Ink Black (#1d1d1d). Section should have 75px top margin.
Create a footer section: background Accent Teal (#75fbee). Text in AkkuratMonoLLWeb weight 400, 18px, Ink Black (#1d1d1d), letter-spacing 0.1em. Content 'Oxford 4:44 AM' and 'NY 11:44 PM / PDX 8:44 PM' separated by 10px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520651091-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520651091-thumb.jpg |
