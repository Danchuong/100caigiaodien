# Fantasy — Refero Style

- Refero URL: https://styles.refero.design/style/ccb67114-6da3-476a-8ca4-b348ab3d0a03
- Site URL: https://fantasy.co
- ID: ccb67114-6da3-476a-8ca4-b348ab3d0a03
- Theme: dark
- Industry: agency
- Created: 2026-02-11T14:23:00.000Z
- Ranks: newest: 1200, popular: 620, trending: 1006

> Black Box Theater — a minimal stage where ideas are spotlighted.

## Description

This design system evokes a sense of stark luxury, like a gallery space for digital art. The absolute black background intensifies the impact of the crisp white typography, creating a high-contrast, text-dominant presentation. Information is delivered with quiet confidence, relying on precise typographic control and generous negative space to command attention, rather than flashy visuals or complex layouts. The singular focus on black and white, paired with meticulous letter-spacing, projects an image of refined authority and intellectual rigor.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Absolute Black | #000000 | neutral | Page backgrounds, section dividers, general UI containers — grounds the entire experience in a deep, void-like aesthetic. |
| Polar White | #ffffff | neutral | Primary text, interactive elements, menu items, borders — contrasts sharply with the black, ensuring maximum readability and a premium feel. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans | Inter | 400, 500 | 13px, 15px, 17px, 42px, 67px, 117px | 1.00, 1.10, 1.40 | The sole typeface, maintaining a cohesive, sophisticated voice. Weights 400 and 500 are primarily used, creating a subtle hierarchy through size rather than heavy weight. Distinctly tight letter-spacing on larger sizes sharpens headlines and gives them an architectural precision. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.4 | -0.13 |
| body-sm | 15 | 1.4 | -0.15 |
| body | 17 | 1.4 | -0.187 |
| heading | 42 | 1.1 | -0.546 |
| heading-lg | 67 | 1.1 | -1.34 |
| display | 117 | 1 | -3.51 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "8.33333px"
  },
  "elementGap": "",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Hero Text Block



### Menu Button + Scroll Indicator



### Stat / Info Cards Row



### Navigation Button - Menu

**Role:** Primary navigation trigger

A ghost button with Polar White text on Absolute Black background. Features a 8.33333px border-radius, no padding, and a white border. Text set in sans-serif, size 17px, weight 400, letter spacing -0.0110em.

### Navigation Link - Implicit

**Role:** Top-level navigation

Ghost button style with no background, Polar White text and border. Text is sans-serif, size 17px, weight 400, letter spacing -0.0110em. Has no explicit padding, indicating it relies on content for sizing.

### Action Button - Explore

**Role:** Feature call to action with minimal styling

Ghost button with no background and Polar White text. Text is sans-serif, size 17px, weight 400, letter spacing -0.0110em. Padding of 0px top/bottom and 26.6667px left/right with 8.33333px border-radius provides a subtle interactive area.

### Action Button - Contact (Black Text)

**Role:** Alternative action button for light backgrounds if theme were to shift

Ghost button with no background and Absolute Black text. Text is sans-serif, size 17px, weight 400, letter spacing -0.0110em. Padding of 0px top/bottom and 26.6667px left/right with 8.33333px border-radius. Currently not visible in provided context, but indicates a potential for inversion.

### Hero Text Block - Dark

**Role:** Primary headline presentation

Text is Polar White, sans-serif, weight 500, size 42px. Line height 1.10. Letter spacing -0.0130em. Displayed on an Absolute Black background with no explicit padding, leveraging implied structural padding.

### Footer Copyright Text

**Role:** Legal and informational text

Text is Polar White, sans-serif, weight 400, size 15px. Line height 1.40. Letter spacing -0.0100em. Uses a more relaxed line height than headlines for readability in blocks of text.

## Do's

- Prioritize Polar White (#ffffff) text on Absolute Black (#000000) backgrounds for all content sections.
- Use sans-serif font for all typography, strictly adhering to weights 400 and 500.
- Apply specific letter-spacing: -0.0300em for 117px text, -0.0200em for 67px, -0.0130em for 42px, -0.0110em for 17px, and -0.0100em for 15px and 13px.
- Maintain generous vertical spacing between sections, using values within the 80px-138px range.
- Apply a consistent border-radius of 8.33333px to all interactive elements like buttons.

## Don'ts

- Avoid introducing any colors other than Polar White (#ffffff) or Absolute Black (#000000) for UI elements.
- Do not use font weights outside of 400 and 500.
- Never add box shadows or strong elevation effects; the design relies on flat contrast.
- Do not vary border-radius from 8.33333px for buttons; consistency is key.
- Avoid using highly saturated images or illustrations; opt for high-contrast, often monochrome, photographic or typographic content.

## Layout

The page adheres to a full-bleed layout with no explicit `pageMaxWidth`, allowing the Absolute Black background to fill the entire viewport. The hero section is full-screen, featuring centered text over the black background, creating an immersive, dramatic introduction. Sections are characterized by consistent, generous vertical spacing (80px-138px `sectionGap`), fostering a spacious, unhurried reading experience. Content arrangement is primarily centered text blocks or simple two-column layouts where text and implicit content elements are balanced. The overall density is low, prioritizing impactful statements and clear typography over information packing. Navigation consists of a minimal top-right 'Menu' button and a logo on the left, maintaining a clean, uncluttered header.

## Imagery

The site's visual language is characterized by an absence of traditional imagery in the main content areas, creating an impactful, text-dominant experience. When visuals appear, as hinted by the brand's logo and what might be product screenshots or abstract graphics in other sections not shown, they exist as stark, high-contrast elements. There's an implied focus on sharp, precise digital artifacts or symbolic representations that integrate seamlessly with the monochrome UI, emphasizing clean lines and sophisticated simplicity, rather than decorative or distracting visual noise. Icons are simple, outlined forms, such as the X and menu icon, reinforcing the minimal aesthetic.

## Similar Brands

| Business | Why |
| --- | --- |
| Apple | High-contrast black and white aesthetic for product reveal pages, with a focus on large, impactful typography and ample negative space. |
| B&O (Bang & Olufsen) | Luxury brand presentation with minimal color, emphasizing material texture (implied through stark contrast) and geometric precision. |
| Acme Co (fictional – typical gallery site) | Portfolio or gallery websites with a dark, minimalist theme, allowing work to stand out against a void-like background. |
| Dribbble (dark mode) | A dark, content-focused UI that uses high-contrast text and minimal ornamentation to highlight creative work. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #ffffff (Polar White)
- Background: #000000 (Absolute Black)
- CTA Background: #000000 (Absolute Black)
- CTA Text: #ffffff (Polar White)
- Border: #ffffff (Polar White)

### 3-5 Example Component Prompts
1. Create a Hero Section: Absolute Black background. Headline 'We are Fantasy.' in Polar White, sans-serif, size 42px, weight 500, line-height 1.10, letter-spacing -0.0130em. Sub-headline 'The creative partner behind the world's biggest digital products.' in Polar White, sans-serif, size 42px, weight 500, line-height 1.10, letter-spacing -0.0130em. Both headlines centered vertically and horizontally within the viewport.
2. Generate a Navigation Button: Label 'Menu' in Polar White, sans-serif, size 17px, weight 400, letter-spacing -0.0110em. Background transparent, border 1px Polar White, border-radius 8.33333px. Padding 0px top/bottom, 26.6667px left/right. Position this to the top right of a header.
3. Create a Footer Link: Text 'Privacy & Terms' in Polar White, sans-serif, size 15px, weight 400, line-height 1.40, letter-spacing -0.0100em. Display on an Absolute Black background. Underline on hover only.
4. Design a Section Headline: 'Launching the next generation of Intelligent Experiences.' in Polar White, sans-serif, size 67px, weight 500, line-height 1.10, letter-spacing -0.0200em. Position with 80px top padding from the previous section.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925535201-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925535201-thumb.jpg |
