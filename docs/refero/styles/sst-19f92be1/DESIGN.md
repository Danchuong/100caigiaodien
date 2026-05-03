# SST — Refero Style

- Refero URL: https://styles.refero.design/style/19f92be1-65ac-4432-a82b-0aa1e685d97d
- Site URL: https://sst.dev
- ID: 19f92be1-65ac-4432-a82b-0aa1e685d97d
- Theme: light
- Industry: devtools
- Created: 2026-02-05T14:17:59.000Z
- Ranks: newest: 1228, popular: 404, trending: 708

> Config File on Paper — An architects precise blueprint on pristine white, using code as a primary visual element.

## Description

This design system presents complex technical configurations with a light, spacious, and highly legible aesthetic. The dominant use of a nearly white background provides a clean canvas, while a nuanced palette of near-gray and muted violet shades for text and interactive elements grounds the interface without heavy contrasts. A signature element is the code block's precise syntax highlighting, which uses a range of vivid and moderate hues to structure information within a constrained, elegant form.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Page White | #ffffff | neutral | Page backgrounds, elevated components like the code editor card. |
| Border Ash | #e8e8f2 | neutral | Subtle borders on interactive elements like search buttons and code editors, providing minimal visual separation. |
| Text Graphite | #403f53 | neutral | Body text and secondary information, offering good contrast against white without being stark black. |
| Text Slate | #767682 | neutral | Tertiary text, icons, and muted UI elements. It provides a soft, secondary visual cue. |
| Text Fog | #a8a8b0 | neutral | Dimmed or inactive text elements, such as placeholder text or disabled states, providing low visual impact. |
| Text Jet | #111111 | neutral | Heading text, providing highest contrast for primary titles. |
| Primary Violet | #303055 | brand | Main call-to-action text, links, and prominent headings. This muted violet provides the primary brand identity, appearing frequently for interactive elements. |
| Code Rose | #984e4d | accent | Syntax highlighting in code blocks, for specific types of values or keywords. |
| Code Magenta | #8844ae | accent | Syntax highlighting in code blocks, providing vivid contrast for important elements like function names or variables. |
| Code Sky | #5196b3 | accent | Syntax highlighting for specific code elements, like type definitions or comments. |
| Code Indigo | #3b61b0 | accent | Syntax highlighting for string literals or other specific code constructs. |
| Code Teal | #096e72 | accent | Syntax highlighting for certain keywords or declarations within code blocks. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| IBM Plex Mono | monospace | 400, 600 | 14px, 16px, 18px, 48px | 1.00, 1.10, 1.80 | Code blocks and monospaced text. The tight letter-spacing gives code a compact, precise appearance. |
| Rubik Variable | sans-serif | 400, 500, 600 | 12px, 13px, 14px, 16px, 18px, 20px | 1.00, 1.20, 1.50, 1.65, 1.78, 1.80 | General UI text, headings, buttons, and body copy. Variable weights and fine letter-spacing adjustments provide legibility and a crisp, modern feel across different sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.78 | 0.016 |
| body | 14 | 1.5 | 0.056 |
| body-lg | 16 | 1.5 |  |
| subheading | 18 | 1.2 |  |
| heading | 20 | 1.2 |  |
| display | 48 | 1.1 | -0.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "buttons": "4px",
    "default": "4px"
  },
  "elementGap": "3-16px",
  "sectionGap": "64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Code Editor Card



### npm Install CTA with Badge



### Nav Button Group



### Primary Heading

**Role:** Hero section titles

Uses 'Text Jet' (#111111) text color, IBM Plex Mono, 48px size, 600 weight, and 1.00 line height, creating a bold, assertive primary statement.

### Nav Button Default

**Role:** Secondary navigation and utility buttons

Background 'Page White' (rgba(255, 255, 255, 0.8)), text 'Text Graphite' (rgba(26, 26, 46, 0.6)), border 'Border Ash' (rgb(232, 232, 242)), 4px border radius with 4px 0px 0px 4px for left grouping and 0px 4px 4px 0px for right. Padding is 1px top/bottom, 9-10px left/right. Uses Rubik Variable 400 weight.

### Nav Button Solitary

**Role:** Standalone secondary actions or filters in header.

Background 'Page White' (rgba(255, 255, 255, 0.8)), text 'Text Graphite' (rgba(26, 26, 46, 0.6)), border 'Border Ash' (rgb(232, 232, 242)), 4px border radius. Padding is 0px top/bottom, 12px left/right. Uses Rubik Variable 400 weight.

### Text Link Button

**Role:** Inline textual actions

Transparent background, text 'Primary Violet' (rgb(48, 48, 85)), no border radius. Uses Rubik Variable 400 weight with no explicit padding, relying on surrounding text flow.

### Code Editor Card

**Role:** Display of structured code examples

Background 'Page White' (#ffffff) with a subtle shadow, 8px border radius, and text styled with 'IBM Plex Mono'. Contains syntax highlighting with 'Code Rose' (#984e4d), 'Code Magenta' (#8844ae), 'Code Sky' (#5196b3), 'Code Indigo' (#3b61b0), and 'Code Teal' (#096e72).

### npm install Button

**Role:** Call to action for installation

Text 'Primary Violet' (rgb(48, 48, 85)) on a transparent background, prefixed with a 'Text Slate' (rgb(118, 118, 130)) chevron icon. Acts as a simple, actionable link.

## Do's

- Prioritize 'Primary Violet' (#303055) for all interactive clickable elements to maintain brand identity.
- Use 'Page White' (#ffffff) as the primary background for all page sections and elevated components.
- Apply 'Border Ash' (#e8e8f2) for subtle borders on all secondary buttons and input fields to define interactive regions subtly.
- Ensure headings use 'Text Jet' (#111111) to establish clear hierarchy and strong visual anchors.
- Employ IBM Plex Mono for all code displays, capitalizing on its fixed-width and precise letter-spacing of -0.021em.
- Maintain a default border-radius of 4px for all buttons and interactive elements, and 8px for cards and containers.
- Utilize the full range of custom colors for syntax highlighting within code blocks to ensure legibility and structural clarity.

## Don'ts

- Avoid using highly saturated, non-brand colors outside of code syntax highlighting.
- Do not use letter-spacing values less than -0.021em or greater than 0.056em for any text element.
- Do not introduce strong, intrusive shadows; rely on 'Page White' backgrounds on 'Border Ash' for subtle elevation.
- Avoid mixed-case headings; all primary headings are sentence case with a strong weight.
- Do not use large images or prominent graphical elements that disrupt the clean, text-heavy layout.
- Never use `background-color: transparent` for primary call-to-action buttons; solid backgrounds are preferred for prominence.

## Layout

The page maintains a centered, max-width layout, relying on ample white space. The hero section prominently features a split layout with a large, bold 'IBM Plex Mono' headline on the right and a 'Code Editor Card' on the left, demonstrating the product's core functionality upfront. Content generally follows a vertical stacking of sections, with consistent padding. Navigation is handled by a standard top bar with right-aligned utility links and branding on the left. The overall density is comfortable, prioritizing readability and systematic information presentation.

## Imagery

The site primarily uses code snippets and icons as its visual language. Photography is absent. Illustrations are minimal and functional, focused on conveying technical concepts rather than decorative flourishes. The code snippets, particularly the 'Code Editor Card', are themselves a central visual element, colorized using the accent palette for enhanced readability and visual interest. Icons are either monocolor (Text Slate, Primary Violet) or outlined, maintaining a lightweight and functional aesthetic. Visuals serve an explanatory role, illustrating product functionality directly and minimally, rather than creating atmosphere.

## Elevation

| Element | Style |
| --- | --- |
| Code Editor Card | 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 2px rgba(0, 0, 0, 0.06) |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Shares a clean, developer-focused aesthetic with code blocks as prominent visual elements, subtle UI interactions, and a white/muted-gray color palette with a single accent hue. |
| Stripe | Employs a precise, almost clinical UI with ample white space, strong typography for headings, and functional, minimal use of color for interactive states and branding. |
| GitHub Docs | Features a light theme, emphasis on code readability, structured content layout, and a functional approach to design that prioritizes information clarity over decorative elements. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #111111 (Jet)
- Primary CTA: #303055 (Violet)
- Background: #ffffff (White)
- Border: #e8e8f2 (Ash)
- Secondary Text: #403f53 (Graphite)

### 3-5 Example Component Prompts
1. Create a primary heading: 'For whatever you build.' using IBM Plex Mono, weight 600, size 48px, line height 1.00, color #111111. Position it prominently in a hero section.
2. Construct a button group for header navigation: two buttons. Left button: background rgba(255, 255, 255, 0.8), text rgba(26, 26, 46, 0.6), border #e8e8f2, border-radius 4px 0px 0px 4px, padding 1px 10px 1px 10px. Right button: same style but border-radius 0px 4px 4px 0px, padding 1px 9px 1px 10px. Both use Rubik Variable 400 weight.
3. Design a code editor card: background #ffffff, border-radius 8px, box-shadow light elevation. Inside, display code using IBM Plex Mono, 14px, 400 weight, letter-spacing -0.021em, with various syntax colors: #984e4d, #8844ae, #5196b3, #3b61b0, #096e72.
4. Generate an 'npm install' prompt: Text 'npm i sst' in rgb(48, 48, 85) using Rubik Variable 400 weight, preceded by a chevron icon in rgb(118, 118, 130).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923470161-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923470161-thumb.jpg |
