# Grand Matter — Refero Style

- Refero URL: https://styles.refero.design/style/703d69b7-2863-44fa-a443-2ac090db3873
- Site URL: https://grandmatter.com
- ID: 703d69b7-2863-44fa-a443-2ac090db3873
- Theme: light
- Industry: agency
- Created: 2026-04-30T04:02:02.893Z
- Ranks: newest: 1, popular: 109, trending: 77

> Editorial Art House

## Description

Grand Matter features a high-contrast, editorial aesthetic. It pairs bold, classic serif typography for headlines with contemporary sans-serif for body text, creating a distinguished yet approachable feel. The palette is largely monochrome, relying on stark black, white, and off-white neutrals. A vibrant orange and a vivid blue act as precise accent colors, sparingly deployed to highlight interactive elements and navigation, giving a sense of sophisticated playfulness amidst the gravitas. Surfaces are predominantly flat, with minimal elevation, emphasizing content and typography. Layout is spacious, featuring generous vertical rhythm and clear content segmentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Pitch Black | #000000 | neutral | Primary text, strong borders, navigation accents, foundational UI elements |
| Deep Charcoal | #0f2226 | neutral | Secondary text, subtle borders, input text and outlines |
| Canvas White | #ffffff | neutral | Primary page background, prominent card surfaces, essential text against dark backgrounds |
| Light Mist | #f8f7f7 | neutral | Subtle background for UI sections, secondary card surfaces, input backgrounds |
| Warm Parchment | #ede8e0 | neutral | Section backgrounds, image backgrounds, tertiary surface levels, subtle borders |
| Ash Gray | #020202 | neutral | Darkest background for subtle elevation, alternative text color |
| Radiant Orange | #f25f29 | accent | Navigation active states, decorative accents — a vibrant punctuation against the neutral palette |
| Electric Blue | #1573dd | accent | Outlined action borders, interactive links, image borders — providing a clear interactive signal |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui | 400 | 18px | 1.67 | Body text, navigation items, descriptive content where clarity and neutrality are key. |
| big-caslon-fb | serif | 400 | 16px, 18px, 20px, 24px, 32px, 48px, 54px, 56px | 0.82, 0.85, 0.87, 0.88, 0.96, 1.00, 1.11, 1.22, 1.67 | Display headlines and subheadings, callouts, and prominent text elements. This serif delivers a classic, authoritative voice. |
| adobe-caslon-pro | serif | 400 | 12px, 18px, 24px, 32px, 56px | 0.88, 1.00, 1.11, 1.50 | Secondary headlines, emphasized body text, and specific link styles. Its tighter tracking at larger sizes maintains elegance. |
| basis-grotesque-black | sans-serif | 400, 600 | 16px, 24px, 32px, 56px | 0.78, 0.87, 0.92, 0.96, 1.00, 1.11 | Specialized headlines and key informational tags. The heavy weights and negative tracking create impact and a modern feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | -0.5 |
| body-sm | 16 | 1.67 | -0.5 |
| body | 18 | 1.67 | -0.5 |
| subheading | 24 | 1.11 | -0.67 |
| heading | 32 | 0.96 | -0.89 |
| heading-lg | 48 | 1 | -1.33 |
| display | 56 | 0.78 | -1.75 |

## Spacing & Shape

```json
{
  "radius": {
    "inputs": "5px",
    "buttons": "5px"
  },
  "elementGap": "20px",
  "sectionGap": "80px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Form Button

**Role:** Primary action within forms or specific interactive elements.

Background is Light Mist (#f8f7f7), text is Deep Charcoal (#0f2226), with a 1px solid Deep Charcoal (#0f2226) border. Has 5px rounded corners and 10px padding on all sides. Font is big-caslon-fb at 16px, 400 weight.

### Text Input (Simple)

**Role:** Standard input fields for text entry.

Background is Light Mist (#f8f7f7), text is Deep Charcoal (#0f2226), with a 1px solid Deep Charcoal (#0f2226) border. Has 5px rounded corners and 10px vertical, 40px horizontal padding. Font is big-caslon-fb at 16px, 400 weight.

### Navigation Badge

**Role:** Categorization or filter labels in navigation.

Transparent background, text is Warm Parchment (#ede8e0), with no border or padding and 0px border radius. Used for 'All', 'UK', 'US' navigation options.

### Outline Link

**Role:** Interactive text links and visual borders for interactive elements.

Text in Electric Blue (#1573dd), with a 1px Electric Blue (#1573dd) border. No background. Used for emphasizing actionable text and outlining specific UI elements.

### Accent Navigation Link

**Role:** Current or active navigation item.

Text and border in Radiant Orange (#f25f29), transparent background. Used to clearly indicate the selected menu item, like 'UK' or 'US'.

## Do's

- Prioritize big-caslon-fb or adobe-caslon-pro for headings and display text to establish an editorial and authoritative tone.
- Use Pitch Black (#000000) for primary text and Deep Charcoal (#0f2226) for secondary text and borders to maintain high contrast and sophistication.
- Employ Light Mist (#f8f7f7) for section backgrounds and Warm Parchment (#ede8e0) for subtler background variations to create depth across surfaces.
- Utilize Radiant Orange (#f25f29) for key navigation accents and Electric Blue (#1573dd) for interactive link borders, ensuring color is used as functional punctuation.
- Apply 5px border-radius to all interactive input and button components, creating a subtle softness without compromising structure.
- Maintain comfortable spacing with 80px section gaps and 20px element gaps, ensuring visual breathing room across the layout.
- Use Inter at 18px with 1.67 line height for all body text to ensure readability and a clean informational delivery.

## Don'ts

- Avoid applying heavy drop shadows; the system favors flat surfaces and content-driven elevation.
- Do not introduce additional vivid colors beyond Radiant Orange and Electric Blue for UI elements; maintain a restricted accent palette.
- Do not use highly decorative borders or complex background patterns; simple 1px solid borders are preferred.
- Refrain from using large images as primary page backgrounds; instead, use neutral background colors to frame content.
- Do not deviate from the specified negative letter-spacing for display typography; it is crucial to the distinctive feel.
- Avoid overly dense content blocks; prioritize generous white space and clear visual separation between elements.
- Do not use generic system fonts for headlines; always opt for big-caslon-fb, adobe-caslon-pro, or basis-grotesque-black to preserve brand identity.

## Layout

The page uses a contained layout within a comfortable maximum width, leaving generous margins on larger screens. The hero section is full-bleed, using a dramatic visual as its background with centered, large-scale typography. Subsequent sections alternate between stark white and light gray backgrounds, creating a clear vertical rhythm. Content is generally arranged in two-column text-left/image-right or centered text stacks, allowing for spacious and unhurried information delivery. A 3-column grid is utilized for showcasing artists, featuring image-dominant cards. Navigation is a minimalist top bar, with a hamburger menu for expanded options and subtle accent color for active states.

## Imagery

Imagery primarily features product shots or artist illustrations. Photography is often high-contrast and mood-driven, using selective color saturation (e.g., magenta tint on a portrait) or stark monochrome treatments to create dramatic impact. Illustrations are varied in style but serve as content; both raw and stylized. Icons are minimal, clean, and often outlined, playing a supportive role to typography. Imagery is typically contained within cards or sections, used for explanation or atmosphere rather than full-bleed decorative elements. Density is moderate, balancing textual information with striking visual examples.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Similar high-contrast editorial look with classic serif headlines and clean sans-serif body text. |
| Pentagram | Employs an elegant, minimalist aesthetic with focus on typography and clear visual hierarchy. |
| &Walsh | Uses bold typography and a limited but distinct accent color palette against a neutral background. |
| Kinfolk | Features a spacious, editorial layout with high-quality photography and restrained color. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #0f2226
accent: #f25f29
primary action: #1573dd (outlined action border)

Example Component Prompts:
1. Create a hero section: full-bleed background with a vivid image (like the magenta portrait), centered headline 'Meaningful Creativity' in big-caslon-fb, 56px, 400 weight, #ffffff, letter-spacing -1.75px. Subheading 'Grand Matter' in Inter, 18px, 400 weight, #ffffff, normal letter-spacing.
2. Create an Outlined Link: 'Learn more' text in Electric Blue (#1573dd), with a 1px solid Electric Blue (#1573dd) border. Font adobe-caslon-pro, 18px, 400 weight, letter-spacing -0.56px.
3. Create a Form Text Input: background Light Mist (#f8f7f7), text Deep Charcoal (#0f2226), 1px solid Deep Charcoal (#0f2226) border, 5px border-radius, 10px vertical and 40px horizontal padding. Placeholder text in Deep Charcoal (#0f2226). Font big-caslon-fb, 16px, 400 weight, letter-spacing -0.49px.
4. Create a Section Heading: 'Our Artists' in big-caslon-fb, 32px, 400 weight, Pitch Black (#000000), letter-spacing -0.89px. Immediately followed by a sub-line 'Chosen for their unique styles across multiple disciplines' in Inter, 18px, 400 weight, Deep Charcoal (#0f2226), normal letter-spacing.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521698400-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521698400-thumb.jpg |
