# Sociotype — Refero Style

- Refero URL: https://styles.refero.design/style/973332dc-4e10-4e90-85d8-3bce9c3cd3ed
- Site URL: https://socio-type.com
- ID: 973332dc-4e10-4e90-85d8-3bce9c3cd3ed
- Theme: light
- Industry: design
- Created: 2026-04-30T02:23:06.008Z
- Ranks: newest: 383, popular: 71, trending: 40

> Editorial White Canvas

## Description

Sociotype presents as a serious, editorial platform for typography, characterized by an expansive white canvas, precise black typography, and highly controlled spacing. Interaction elements are almost entirely ghosted or underlined, relying on a subtle shift to black for active states. The visual weight is carried by the large, expressive font specimens and carefully structured content blocks, rather than decorative colors or heavy UI components.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, primary text on dark hero sections |
| Ink Black | #000000 | neutral | Primary text, borders, active states for ghost buttons and navigation, accent markings |
| Medium Gray | #818181 | neutral | Muted text, secondary information, placeholder text, inactive link borders |
| Light Gray | #d6d6d6 | neutral | Subtle dividers, borders between content sections |
| Faded Gray | #9d9d9d | neutral | Tertiary text, list item borders |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Main Onsite |  | 400 | 11px, 12px, 13px, 14px, 16px, 18px, 26px, 40px | 1, 1.13, 1.19, 1.22, 1.29, 1.31, 1.33, 1.38 | Main Onsite — detected in extracted data but not described by AI |
| Onsite | system-ui, sans-serif | 400 | 251px | 1.25 | Primary typeface for all body text, navigation, buttons, and smaller headings. Its regular weight ensures readability while maintaining a modern, understated presence. |
| Avec Sharp | serif | 400 | 251px | 1.25 | Display typeface for featured headlines and typographic showcases. Its unique character defines the brand's aesthetic in a large, impactful way. |
| Ceno | serif | 400 | 251px | 1.25 | Alternative display typeface, used for specific typographic showcases. Shares the overall expressive, impactful role of Avec Sharp. |
| Meso | serif | 400 | 251px | 1.25 | Alternative display typeface, used for specific typographic showcases. Expands the brand's visual range for showcasing different font styles. |
| Gestura | serif | 400 | 251px | 1.25 | Alternative display typeface with ligatures, used for specific typographic showcases. Highlights the intricate details of font design. |
| Rework | serif | 400 | 251px | 1.25 | Alternative display typeface, used for specific typographic showcases. Contributes to the diverse presentation of font families. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.38 | 0.88 |
| body | 14 | 1.29 | 0.35 |
| heading | 26 | 1.13 | 0.26 |
| display-sm | 40 | 1 | 0.6 |
| display | 251 | 1.25 | 2.51 |

## Spacing & Shape

```json
{
  "radius": {
    "none": "0px"
  },
  "elementGap": "12px",
  "sectionGap": "120px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button - Inactive

**Role:** Navigational and call-to-action link styling

Text in Ink Black or Canvas White, with a 1px bottom border of the same color. No background fill or padding. This gives buttons a lightweight, integrated feel with the surrounding text.

### Ghost Button - Muted

**Role:** Secondary actions or menu items

Text in Medium Gray, with a 1px bottom border of the same color. No background fill or padding. Used for less prominent interactive elements.

### Featured Card

**Role:** Displaying prominent typefaces without visual distraction

Completely transparent background, no borders, no box shadow, with 0px border-radius. Content manages its own spacing and visual hierarchy. Features a text block with 'Onsite' typography, 14px size, Ink Black color, 0.025em letter spacing, and a 1px Ink Black bottom border for 'More Info' link.

### Text Input

**Role:** User input for forms (e.g., newsletter signup)

Transparent background, placeholder/text in Medium Gray (#818181), with a thin 1px bottom border in Medium Gray.

## Do's

- Prioritize Ink Black (#000000) for all primary text and interactive element outlines on default light backgrounds.
- Use Canvas White (#ffffff) as the dominant page, card, and footer background, establishing a clean, expansive aesthetic.
- Maintain a strict 0px border-radius for all components, including buttons, cards, and input fields, for a sharp, precise feel.
- Implement interactive elements primarily as ghost buttons or underlined text, with minimal visual styling beyond color and text decoration transitions.
- Structure content with ample vertical spacing, leveraging the implied section gap of 120px to create distinct content blocks.
- Employ the Onsite font for all functional text under 'display' sizes, ensuring consistency in body, navigation, and button labels.
- Utilize Avec Sharp, Ceno, Meso, Gestura, or Rework fonts exclusively for large, impactful display typography to showcase different font characteristics.

## Don'ts

- Avoid using saturated background colors or heavy fills for interactive elements; stick to the achromatic palette.
- Do not introduce shadows or significant elevation on cards or buttons; elements should appear flat against the canvas.
- Refrain from applying rounded corners to any UI elements; all corners should be sharp 0px radius.
- Do not use highly contrasting accent colors for calls to action; rely on text weight, size, and subtle border changes for emphasis.
- Avoid dense, clustered layouts; allow generous empty space around content sections and individual elements.
- Do not deviate from the specified typefaces Onsite, Avec Sharp, Ceno, Meso, Gestura, or Rework; no other typefaces are part of this system.
- Do not use generic system fonts or default browser styles for links; ensure all interactive text uses the defined ghost button or underlined styles.

## Layout

The page maintains a full-bleed structure without a fixed maximum width for its main content, allowing elements to span the entire viewport. The hero section often features a large-scale, sometimes abstract image or graphic background with centered, prominent type specimen alongside informative text. Content sections below the hero typically follow a two-column layout with text on one side and associated visuals or another type specimen on the other. Navigation is a minimalist top bar with ghosted links, and a very large, eye-catching text (Sociotype) floats over the hero graphic. Vertical rhythm is established through generous, consistent section gaps, creating a spacious, editorial flow rather than a dense grid.

## Imagery

This design system relies heavily on large-scale typographic specimen imagery and abstract, sometimes vibrant, graphic backgrounds behind hero sections. Photography is absent. Illustrations are primarily abstract, organic, and colorful, serving as striking backdrops that contrast with the monochrome UI. Icons, if present, are minimal vector outlines, like the 'Cart' icon, suggesting a thin stroke weight. The imagery serves a decorative, atmospheric role, often full-bleed in hero sections, providing visual intrigue without distracting from the UI or text.

## Similar Brands

| Business | Why |
| --- | --- |
| Fonts.com | Similar focus on typographic display and large font specimen showcases. |
| Future Fonts | Monochromatic interface, emphasis on typefaces, and ghosted interactive elements. |
| Pangram Pangram | Clean, spacious layout with strong typographic hierarchy, and limited use of color. |
| Grilli Type | Editorial aesthetic with large-scale typography and minimal UI decoration. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: no distinct CTA color

Example Component Prompts:
1. Create a top navigation bar: Canvas White background, Ink Black ghost text links in Onsite font at 14px (letter-spacing 0.35px). Each link should have a 1px Ink Black bottom border on hover. Spacing between links is 50px right margin. Global top-left brand text 'SOCIOTYPE' in Ink Black. Top-right utilitarian links 'Shop', 'Trials', 'About', 'Cart (0)'.
2. Design a featured typeface section: Canvas White background. Headline 'Featured: [Typeface Name]' in Onsite 40px (letter-spacing 0.6px), Ink Black. Followed by descriptive body text in Onsite 14px (letter-spacing 0.35px), Ink Black. A 'More Info →' ghost button (Ink Black text and 1px bottom border, Onsite 14px, letter-spacing 0.35px).
3. Create a prominent typeface showcase block: Avec Sharp 251px (letter-spacing 2.51px) in Ink Black on a Canvas White background. Ensure no padding or border-radius, maintaining a sharp edge.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515764859-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777515764859-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973332dc-4e10-4e90-85d8-3bce9c3cd3ed-1777582862332-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973332dc-4e10-4e90-85d8-3bce9c3cd3ed-1777582862332-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973332dc-4e10-4e90-85d8-3bce9c3cd3ed-1777582862332-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/973332dc-4e10-4e90-85d8-3bce9c3cd3ed-1777582862332-preview-detail-poster.jpg |
